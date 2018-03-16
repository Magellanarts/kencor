module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //compass
        compass: {
            dist: {
                options: {
                    sassDir: 'dev/sass',
                    cssDir: 'wp/wp-content/themes/kencor',
                    specify: 'dev/sass/style.scss',
                    imagesDir: 'dev/i/'
                }
            }
        },

        copy: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: 'dev',
                        src: ['*.html', '*.zip', '*.php', 'js/**/*', 'page-templates/*.php', 'i/**/*', 'fonts/**/*', 'data/**/*'],
                        dest: 'wp/wp-content/themes/kencor/'
                    }
                ]
            }
        },

      browserify: {
        dist: {
          files: {
            // destination for transpiled js : source js
            'wp/wp-content/themes/kencor/js/site.js': 'wp/wp-content/themes/kencor/js/site.js'
          },
          options: {
            transform: [['babelify', { presets: "es2015" }]],
            browserifyOptions: {
              debug: true
            }
          }
        }
      },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9', 'ie 10']
            },

            dist: {
                src: 'wp/wp-content/themes/kencor/style.css'
            }

        },

        clean: {
            dist: ['wp/wp-content/themes/kencor/']

        },

        webfont: {
          icons: {
              src: 'dev/i/vectors/*.svg',
              dest: 'dev/fonts',
              options: {
                  stylesheet: 'scss',
                  relativeFontPath: 'fonts/'
              }
          }
        },


        watch: {
            files: ['dev/**'],
            tasks: ['default'],
            options: {
                livereload: true
            }
        }

    });

    //Load in plugins
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-browserify');

    grunt.registerTask('default', ['clean', 'copy', 'compass', 'browserify:dist', 'autoprefixer']);
}