// wrapper function
module.exports = function (grunt) {
    // load all our Grunt plugins
    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // task configuration goes here


/*0*/   clean: {
            main: [
                "res/css/grunt",
                "res/css/dist",
                "res/js/grunt",
                "res/js/dist"//,
                //"res/img/dist"
            ]
        },
// BEGIN BOWER & BOTH
/*1*/   bower_concat: {
            main: {
                dest: {
                    js: 'res/js/src/50-bower.js',
                    css: 'res/css/src/50-bower.css'
                },
                exclude: [
                    'jquery',
                    'bootstrap',
                    'slicknav',
                    'classie',
                    'eventie',
                    'doc-ready',
                    'eventEmitter',
                    'matches-selector',
                    'fizzy-ui-utils',
                    'get-size',
                    'unipointer',
                    'tap-listener',
                    'unidragger',
                    'flickity',
		    'instantclick'
                ],
                includeDev: true
            }
        },
/*5*/    concat: {
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
/*9*/   shell: {
            options: {
                stderr: false
            },
            main: {
                command: 'mkdir res/css/grunt/php && mkdir res/css/grunt/html && cp {about.php,contact.php,functional.php,index.php,ux.php,whyus.php} res/css/grunt/php/ && for line in $(find res/css/grunt/php -maxdepth 1 -name "*.php" | cut -c 19-); do php res/css/grunt/php/"$line" > res/css/grunt/html/main.html;  done && for line in $(find res/css/grunt/php -maxdepth 1 -name "*.php" | cut -c 19-); do php res/css/grunt/php/"$line" > res/css/grunt/html/$(echo $line | rev | cut -c 5- | rev).html; done'
            }
        },
/*12*/  htmllint: {
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
/*8*/   autoprefixer: {
            options: {
                safe: true
            },
            maincss: {
                src: ['res/css/grunt/main.concat.css'],
                dest: 'res/css/grunt/main.prfx.css'
            }
        },
/*10*/  critical: {
            main: {
                options: {
                    base: './',
                    css: 'res/css/grunt/main.prfx.css',
                    extract: true,
                    width: 1920,
                    height: 1920
                },
                src: 'res/css/grunt/html/main.html',
                dest: 'res/css/grunt/critical.css'
            }
        },
/*11*/  cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            main: {
                files: {
                    'res/css/dist/main.min.css': ['res/css/grunt/main.prfx.css'],
                    'res/css/dist/critical.min.css': ['res/css/grunt/critical.css'],
                    'res/css/dist/sprites.min.css': ['res/css/grunt/sprite-comp.css', 'res/css/grunt/sprite-misc.css']
                }
            }
        },
// END CSS
        
// BEGIN JS
/*2:7*/ jsvalidate: {
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
/*6*/   uglify: {
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
/*3*/    imagemin: {
            main: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    expand: true,
                    cwd: 'res/img/src/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'res/img/dist/'
                }]
            },
            sprites: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    expand: true,
                    cwd: 'res/img/grunt/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'res/img/dist/'
                }]
            }
        },
/*4*/   sprite: {
            misc: {
                src: 'res/img/src/*.png',
                dest: 'res/img/grunt/sprites/sprite-misc.png',
                destCss: 'res/css/grunt/sprite-misc.css',
                imgPath: '/res/img/grunt/sprites/sprite-misc.png'
            },
            companies: {
                src: 'res/img/dist/companies/*.png',
                dest: 'res/img/grunt/sprites/sprite-comp.png',
                destCss: 'res/css/grunt/sprite-comp.css',
                imgPath: '/res/img/grunt/sprites/sprite-comp.png'
            }
        },
/**/    svgmin: {
            options: {
                plugins: [
                    {
					removeViewBox: false
				}, {
					removeUselessStrokeAndFill: false
				}
			]
		},
		main: {
			files: {
				'res/img/dist/loader.svg': 'res/img/src/loader.svg'
			}
		}
	}
// END MEDIA
    });

    // define the default task that executes when we run 'grunt' from inside the project
    grunt.registerTask('default', [
        'clean',
//        'csslint:before_min',
/*SRC*/ 'bower_concat',
        'jsvalidate:before_min',
/*SRC*/ 'newer:imagemin:main',
/*SRC*/ 'newer:svgmin',
/*SRC*/ 'sprite',
        'concat',
        'uglify',
        'jsvalidate:after_min',
        'autoprefixer',
        'shell',
        'critical',
        'cssmin',
        'htmllint'
//        'newer:imagemin:sprites'
//        'csslint:after_min'
    ]);

};
