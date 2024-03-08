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
    <form id="myForm" action="/portofolio/{{$portofolio->id}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
       
        <div class="form-group">
          <label for="judul" class="text-dark">judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{$portofolio->judul}}">
          @error('judul')
            <div class="alert alert-danger"{{$message}}></div>
          @enderror

          <label for="gambar" class="text-dark">Gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar" value="{{$portofolio->gambar}}">
          @error('gambar')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror

          <label for="pesan" class="text-dark">Pesan</label>
          <input type="text" class="form-control" id="pesan" name="pesan" value="{{$portofolio->pesan}}">
          @error('pesan')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror

          <label for="jenisprestasi" class="text-dark">Jenis Prestasi</label>
          <select class="form-control" id="jenisprestasi" name="jenisprestasi">
              <option value="website" class="text-dark" {{ $portofolio->jenisprestasi == 'website' ? 'selected' : '' }}>Website</option>
              <option value="design" class="text-dark" {{ $portofolio->jenisprestasi == 'design' ? 'selected' : '' }}>Design</option>
              <option value="mobile" class="text-dark" {{ $portofolio->jenisprestasi == 'mobile' ? 'selected' : '' }}>Mobile</option>
          </select>
          

          @error('pesan')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror

        </div>
        <button type="submit" class="btn btn-primary inisubmitya">Submit</button>
      </form>
</body>
</html>