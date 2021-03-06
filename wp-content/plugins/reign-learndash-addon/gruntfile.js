'use strict';
module.exports = function ( grunt ) {

    // load all grunt tasks matching the `grunt-*` pattern
    // Ref. https://npmjs.org/package/load-grunt-tasks
    require( 'load-grunt-tasks' )( grunt );
    grunt.initConfig( {
        // watch for changes and trigger sass, uglify and livereload
        watch: {
            sass: {
                files: [ 'assets/sass/*.{scss}' ],
                tasks: [ 'sass', 'autoprefixer' ]
            }//,
            // js: {
            //     files: '<%= uglify.frontend.src %>',
            //     tasks: [ 'uglify' ]
            // }
        },
        // sass
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'assets/css/learndash-ld30.css': 'learndash/ld30/assets/sass/main_ld30.scss'
                }
            }
        },
        // rtlcss
        rtlcss: {
            myTask: {
                // task options
                options: {
                    // generate source maps
                    map: { inline: false },
                    // rtlcss options
                    opts: {
                        clean: false
                    },
                    // rtlcss plugins
                    plugins: [ ],
                    // save unmodified files
                    saveUnmodified: true
                },
                expand: true,
                cwd: 'assets/css',
                dest: 'assets/css/rtl',
                src: [ '*.css' ]
            }
        },
        // autoprefixer
        autoprefixer: {
            options: {
                browsers: [ 'last 2 versions', 'ie 9', 'ios 6', 'android 4' ],
                map: true
            },
            files: {
                expand: true,
                flatten: true,
                src: 'assets/css/*.css',
                dest: 'assets/css/'
            }
        },
        // Check text domain
        checktextdomain: {
            options: {
                text_domain: [ 'reign-learndash-addon', 'learndash', 'learndash_course_grid', 'learndash-course-grid', 'reign' ], //Specify allowed domain(s)
                keywords: [ //List keyword specifications
                    '__:1,2d',
                    '_e:1,2d',
                    '_x:1,2c,3d',
                    'esc_html__:1,2d',
                    'esc_html_e:1,2d',
                    'esc_html_x:1,2c,3d',
                    'esc_attr__:1,2d',
                    'esc_attr_e:1,2d',
                    'esc_attr_x:1,2c,3d',
                    '_ex:1,2c,3d',
                    '_n:1,2,4d',
                    '_nx:1,2,4c,5d',
                    '_n_noop:1,2,3d',
                    '_nx_noop:1,2,3c,4d'
                ]
            },
            target: {
                files: [ {
                        src: [
                            '*.php',
                            '**/*.php',
                            '!node_modules/**',
                            '!options/framework/**',
                            '!tests/**'
                        ], //all php
                        expand: true
                    } ]
            }
        },
        // Generate POT files.
        makepot: {
            options: {
                type: 'wp-plugin',
                domainPath: 'languages',
                potHeaders: { // Headers to add to the generated POT file.
                    poedit: true, // Includes common Poedit headers.
                    'Last-Translator': 'Reign Leandash Addon',
                    'Language-Team': 'Reign Leandash Addon',
                    'report-msgid-bugs-to': '',
                    'x-poedit-keywordslist': true // Include a list of all possible gettext functions.
                },
                updateTimestamp: true // Whether the POT-Creation-Date should be updated without other changes.
            },
            frontend: {
                options: {
                    potFilename: 'reign-learndash-addon.pot', // Name of the POT file.
                    exclude: [ 'node_modules/*', 'options/framework/*' ], // List of files or directories to ignore.
                }
            }
        }

    } );

    // register task
    grunt.registerTask( 'default', [ 'sass', 'rtlcss', 'autoprefixer', 'checktextdomain', 'makepot' ] );
};
