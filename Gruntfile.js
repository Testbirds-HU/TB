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
        		}
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
            	dest: 'res/css/prfx/main.prfx.css'
            },
            customcss: {
            	src: 'res/css/layout.css',
            	dest: 'res/css/prfx/layout.prfx.css'
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
					src: ['Gruntfile.js', 'res/js/min/*.js']
				}
			}
		}
    });

    // define the default task that executes when we run 'grunt' from inside the project
    grunt.registerTask('default', [
    	'bower_concat',
    	'jsvalidate:before_min',
    	'concat',
    	'autoprefixer'
    ]);

};