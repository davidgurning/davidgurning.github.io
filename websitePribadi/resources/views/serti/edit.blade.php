<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio-Website</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://unpkg.com/feather-icons"> --}}

    {{-- Add the lines in the layout file --}}
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/styleprog.css">
    <link rel="stylesheet" href="style/timeline.css">
    <link rel="stylesheet" href="responsive/responsive.css">
    {{-- <link rel="stylesheet" href="modals/modals.css"> --}}
    <link rel="stylesheet" href="contact/contact.css">
    <link rel="stylesheet" href="style/slideshow.css">
    {{-- <link rel="stylesheet" href="style/modal.css"> --}}
  </head>
<body>
    <div class="modal-content">
        {{-- Modal header --}}
        <div class="modal-header">
          <h4 class="modal-title text-dark" >Tambah Sertifikat</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        {{-- Modal body (form content) --}}
        <div class="modal-body">
          <form id="myForm" action="/serti/{{$serti->id}}" method="post" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="form-group">
              <label for="jenissertifikat" class="text-dark">jenis Sertifikat</label>
            <select type="text" class="form-control" id="jenissertifikat" name="jenissertifikat">
              <option value="senior high school" class="text-dark" {{ $serti-> jenissertifikat == 'senior high school' ? 'selected' : '' }}>Senior High School</option>
              <option value="code competition" class="text-dark" {{ $serti-> jenissertifikat == 'code competition' ? 'selected' : '' }}>Code Competition</option>
              <option value="course" class="text-dark" {{ $serti-> jenissertifikat == 'course' ? 'selected' : '' }}>Course</option>
              <option value="organization" class="text-dark" {{ $serti-> jenissertifikat == 'organizatio' ? 'selected' : '' }}>Organization</option>
            </select>
  
              <label for="gambarsertifikat" class="text-dark">Gambar Sertifikat</label>
              <input type="file" class="form-control" id="gambarsertifikat" name="gambarsertifikat" value="{{$serti->gambarsertifikat}}">>
              @error('gambarsertifikat')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
  
              <label for="judulsertifikat" class="text-dark">Judul Sertifikat</label>
              <input type="text" class="form-control" id="judulsertifikat" name="judulsertifikat" value="{{$serti->judulsertifikat}}">
              @error('pesan')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
</body>
</html>