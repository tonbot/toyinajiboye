module.exports = function (grunt) {
  // Project configuration
  grunt.initConfig({
    // critical: {
    //   extract: {
    //     options: {
    //       base: "./",
    //       css: [
    //         "css/base.css",
    //         "css/normalize.css",
    //         "lib/owlcarousel/assets/owl.carousel.min.css",
    //       ],
    //     },
    //     files: [{ src: ["index.php"], dest: "criticalCss/critical.css" }],
    //   },
    // },
    purgecss: {
      my_target: {
        options: {
          content: ['./index.php']
        },
        files: {
          'dist/app.css': ['css/style.css']
        }
      }
    }
  });

  // Load plugins
  grunt.loadNpmTasks('grunt-purgecss');

  // Default task(s)
  grunt.registerTask("default", ["purgecss"]);
};
