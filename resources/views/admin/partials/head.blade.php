<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('src/style.css') }}">
    <link rel="stylesheet" href="{{ asset('froala/css/froala_editor.pkgd.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listFroala.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css'
        rel='stylesheet'type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- 
    <script src="https://cdn.tiny.cloud/1/ielnd7tc2i28gvh8rlvl4bqar9l3mh2hdj9vzf9vfvpvp7xm/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script> --}}

    {{-- <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script> --}}

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <title>Document</title>
</head>

<body class="bg-slate-200 dark:bg-gray-900">
