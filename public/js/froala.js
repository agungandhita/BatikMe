
var editor = new FroalaEditor('#isiBerita', {
    contentStyles: {
        'ol': 'list-style-type: decimal;',
        // Tambahkan definisi CSS lain sesuai kebutuhan Anda
    },
  
  
    // Konfigurasi unggah gambar
    imageUploadURL: '/froala-upload-image',
    imageUploadParams: {
        _token: $('meta[name="csrf-token"]').attr('content')
    },
    imageUploadMethod: 'POST',
    events: {
        'image.removed': function(img) {
            // Panggil fungsi untuk menghapus gambar dari server
            handleImageRemoval(img[0].currentSrc);
        }
    }



  });

  function handleImageRemoval(image) {
    // Menggunakan API Froala Editor untuk mendapatkan URL gambar
    var imageUrl = image;
    var formData = new FormData();
    formData.append('image_url', imageUrl);

    fetch('/froala-delete-image', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        .then(response => response.json())
        .then(data => {
        })
        .catch(error => {
        });
}