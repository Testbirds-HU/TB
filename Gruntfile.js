// wrapper function
module.exports = function (grunt) {
    // load all our Grunt plugins
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // task configuration goes here
        
// BEGIN BOWER & BOTH
/**/    bower_concat: {
            main: {
                dest: {
                    js: 'res/js/src/bower.js',
                    css: 'res/css/src/bower.css'
                }
                //exclude: [
                //    'jquery',
                //    'bootstrap'
                //]
            }
        },
/**/    concat: {
            options: {
                separator: ';'
            },
            main_js: {
                src: ['res/js/src/*.js'],
                dest: 'res/js/grunt/main.concat.js'
            },
            main_css: {
                src: ['res/css/src/*.css'],
                dest: 'res/css/grunt/main.concat.css'
            }
        },
// END BOWER
        
//BEGIN HTML
/**/    shell: {
            options: {
                stderr: false
            },
            main: {
                command: 'cp {about.php,contact.php,functional.php,index.php,ux.php,whyus.php} res/css/grunt/php/ && for line in $(find res/css/grunt/php -maxdepth 1 -name "*.php" | cut -c 19-); do php res/css/grunt/php/"$line" > res/css/grunt/html/main.html;  done && for line in $(find res/css/grunt/php -maxdepth 1 -name "*.php" | cut -c 19-); do php res/css/grunt/php/"$line" > res/css/grunt/html/$(echo $line | rev | cut -c 5- | rev).html; done'
            }
        },
        htmllint: {
            main: [
                    'res/css/grunt/html/index.html',
                    'res/css/grunt/html/about.html',
                    'res/css/grunt/html/contact.html',
                    'res/css/grunt/html/functional.html',
                    'res/css/grunt/html/ux.html',
                    'res/css/grunt/html/whyus.html'
                  ]
        },
// END HTML
        
// BEGIN CSS
/**/    autoprefixer: {
            options: {
                safe: true
            },
            maincss: {
                src: ['res/css/grunt/main.concat.css'],
                dest: 'res/css/grunt/main.prfx.css'
            }
        },
/**/    critical: {
            main: {
                options: {
                    base: './',
                    css: 'res/css/grunt/main.prfx.css',
                    extract: true,
                    width: 1920,
                    height: 1080
                },
                src: 'res/css/grunt/html/main.html',
                dest: 'res/css/grunt/critical.css'
            }
        },
/**/    cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            main: {
                files: {
                    'res/css/dist/main.min.css': ['res/css/grunt/main.prfx.css'],
                    'res/css/dist/critical.min.css': ['res/css/grunt/critical.css']
                }
            }
        },
// END CSS
        
// BEGIN JS
/**/    jsvalidate: {
            options: {
                globals: {},
                esprimaOptions: {},
                verbose: false
            },
            before_min: {
                files: {
                    src: ['Gruntfile.js', 'res/js/src/*.js', 'res/js/*.js']
                }
            },
            after_min: {
                files: {
                    src: ['Gruntfile.js', 'res/js/dist/*.js']
                }
            }
        },
/**/    uglify: {
            options: {
                mangle: false
            },
            main: {
                files: {
                    'res/js/dist/main.min.js': ['res/js/grunt/*.js']
                }
            }
        },
// END JS
        
// BEGIN MEDIA
/**/    imagemin: {
            dynamic: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    expand: true,
                    cwd: 'res/img/src/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'res/img/dist/'
                }]
            }
        }
// END MEDIA
    });

    // define the default task that executes when we run 'grunt' from inside the project
    grunt.registerTask('default', [
//        'csslint:before_min',
        'bower_concat',
        'jsvalidate:before_min',
        'concat',
        'newer:uglify',
        'jsvalidate:after_min',
        'autoprefixer',
        //'newer:imagemin',
        'shell',
        'critical',
        'cssmin',
        'htmllint'
//        'csslint:after_min'
    ]);

};
