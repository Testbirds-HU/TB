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
        			js: 'res/js/src/main.js',
        			css: 'res/css/src/main.css'
        		}
        	}
        },
        concat: {
        	options: {
        		separator: ';'
        	},
        	main: {
        		src: ['res/js/src/*.js', 'res/js/instantclick.js'],
        		dest: 'res/js/concat/main.concat.js'
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
    	'concat'
    ]);

};