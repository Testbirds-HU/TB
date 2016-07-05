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
                src: ['res/js/src/*.js', 'res/js/instantclick.js'],
                dest: 'res/js/grunt/main.concat.js'
            },
            main_css: {
                src: ['res/css/src/*.css'],
                dest: 'res/css/grunt/main.concat.css'
            }
        },
// END BOWER
        
// BEGIN CSS
/**/    autoprefixer: {
            options: {
                safe: true
            },
            maincss: {
                src: ['res/css/grunt/main.concat.css', 'res/css/layout.css'],
                dest: 'res/css/grunt/main.prfx.css'
            }
        },
/**/    purifycss: {
            main: {
                src: ['*.php', 'res/js/src/*.js'],
                css: ['res/css/grunt/main.prfx.css'],
                dest: 'res/css/grunt/main.pure.css'
            }
        },
        critical: {
            main: {
                options: {
                    base: './',
                    css: 'res/css/grunt/main.pure.css',
                    width: 1920,
                    height: 1080
                },
                src: 'res/html/src/*.php',
                dest: 'res/css/grunt/crit.css'
            }
        },
/**/    csslint: {
            before_min: {
                options: {
                    import: false
                },
                src: [
                    'res/css/src/component.css',
                    'res/css/src/css-sprites.css',
                    'res/css/src/elonyok.css',
                    'res/css/src/header.css',
                    'res/css/src/kapcsolat.css',
                    'res/css/src/rolunk.css',
                    'res/css/src/screen.css',
                    'res/css/src/tesztek.css',
                    'res/css/src/layout.css'
                ]
            },
            after_min: {
                options: {
                    import: false
                },
                src: ['res/css/dist/main.min.css', 'res/css/dist/layout.min.css']
            }
        },
/**/    cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            main: {
                files: {
                    'res/css/dist/main.min.css': ['res/css/grunt/main.pure.css'],
                    'res/css/dist/layout.min.css': ['res/css/grunt/layout.pure.css']
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
        'autoprefixer',
        'newer:uglify',
        'jsvalidate:after_min',
        'newer:imagemin',
        'purifycss',
        'critical',
        'cssmin'
//        'csslint:after_min'
    ]);

};
