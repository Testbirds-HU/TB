// wrapper function
module.exports = function(grunt){
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
        		},
                exclude: [
                	'jquery',
                	'bootstrap'
                ]
        	}
        },
        concat: {
        	options: {
        		separator: ';'
        	},
        	main_js: {
        		src: ['res/js/src/*.js', 'res/js/instantclick.js'],
        		dest: 'res/js/grunt/main.concat.js'
        	}
        },
        autoprefixer: {
            options: {
            	safe: true
            },
            maincss: {
            	src: 'res/css/src/*.css',
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
			target: {
				src: ['*.php', 'res/js/src/*.js'],
				css: ['res/css/grunt/main.prfx.css'],
				dest: 'res/css/grunt/main.pure.css'
			},
			target: {
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
    	'bower_concat',
    	'jsvalidate:before_min',
    	'concat',
    	'autoprefixer',
    	'newer:uglify',
    	'jsvalidate:after_min',
    	'newer:imagemin',
    	'newer:purifycss',
    	'cssmin'
    ]);

};