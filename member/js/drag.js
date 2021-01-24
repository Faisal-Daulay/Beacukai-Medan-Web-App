(function () {
    // var dropzone = document.getElementById('dropzone');

    // var displayUploads = function(data) {
    //     var uploads = document.getElementById('upload'),
    //         anchor,
    //         x;

    //     for(x = 0; x < data.length; x = x +1) {
    //         anchor = document.createElement('img');
    //         anchor.src = data[x].file;
    //         anchor.width = 200;
    //         anchor.innerText = data[x].name;

    //         uploads.appendChild(anchor);
    //     }
    // }

    // var upload = function(files){
    //     //console.log(files);
    //     var formData = new FormData(),
    //         xhr = new XMLHttpRequest(),
    //         x;

    //     for (x = 0; x < files.length; x = x + 1) {
    //         formData.append('file[]', files[x]);
    //     }

    //     xhr.onload = function() {
    //         var data = JSON.parse(this.responseText);
    //         // console.log(data);

    //         displayUploads(data);
    //     }

    //     xhr.open('post', 'include/upload/upload.php');
    //     xhr.send(formData);
    // }

    // dropzone.ondrop = function(e) {
    //     e.preventDefault();
    //     this.className = 'dropzone';
    //     upload(e.dataTransfer.files);
    // }; 

    // dropzone.ondragover = function() {
    //     this.className = 'dropzone dragover';
    //     return false;
    // }

    // dropzone.ondragleave = function() {
    //     this.className = 'dropzone';
    //     return  false;
    // }

    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });

    function imageIsLoaded(e) {
        $('#myshow').attr('src', e.target.result);
    };
}());