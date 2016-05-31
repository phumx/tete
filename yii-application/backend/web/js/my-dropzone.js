/**
 * Created by PHUMX on 31/5/2016.
 */

$(document).ready(function(){
    Dropzone.options.myAwesomeDropzone = {
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 2, // MB
        maxFiles:1,
        accept: function(file, done) {
        },
        init: function() {
            this.on('addedfile', function(file) {
                if (this.files.length > 1) {
                    this.removeFile(this.files[0]);
                }
            });
        }
    };
});
