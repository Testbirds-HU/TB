// wrapper function
module.exports = function (grunt) {
    // load all our Grunt plugins
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // task configuration goes here
        bower_concat: {
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
        concat: {
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
        autoprefixer: {
            options: {
                safe: true
            },
            maincss: {
                src: 'res/css/grunt/main.concat.css',
                dest: 'res/css/grunt/main.prfx.css'
            },
            customcss: {
                src: 'res/css/layout.css',
                dest: 'res/css/grunt/layout.prfx.css'
            }
        },
        jsvalidate: {
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
        purifycss: {
            main: {
                src: ['*.php', 'res/js/src/*.js'],
                css: ['res/css/grunt/main.prfx.css'],
                dest: 'res/css/grunt/main.pure.css'
            },
            layout: {
                src: ['*.php', 'res/js/src/*.js'],
                css: ['res/css/grunt/layout.prfx.css'],
                dest: 'res/css/grunt/layout.pure.css'
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            main: {
                files: {
                    'res/js/dist/main.min.js': ['res/js/grunt/*.js']
                }
            }
        },
        imagemin: {
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
        },
        csslint: {
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
        cssmin: {
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
        }
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
        'purifycss:main',
        'purifycss:layout',
        'cssmin',
//        'csslint:after_min'
    ]);

};
