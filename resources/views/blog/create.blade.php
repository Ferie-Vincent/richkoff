<!doctype html>
<html lang="fr">
<head>
    <title>Créer un nouvel article</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-image: url('{{ asset('assets/images_/blog/fond.jpg') }}'); 
             background-size: cover; 
             background-position: center; 
             background-repeat: no-repeat;">

    <form action="{{ route('actualite.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5 w-50">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Créer un nouvel article</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre de l'article <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="editor" class="form-label">Contenu de l'article <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('text') is-invalid @enderror" id="editor" name="text" rows="5" required>{{ old('text') }}</textarea>
                        @error('text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="source" class="form-label">Source</label>
                        <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source" value="{{ old('source') }}">
                        @error('source')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="auteur" class="form-label">Auteur</label>
                        <input type="text" class="form-control @error('auteur') is-invalid @enderror" id="auteur" name="auteur" value="{{ old('auteur') }}">
                        @error('auteur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url') }}">
                        @error('url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                            <label class="custom-file-label" for="image">Image principale <span class="text-danger">*</span></label>
                        </div>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="published_at" class="form-label">Date de publication <span class="text-danger">*</span></label>
                        <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" value="{{ old('published_at') }}">
                        @error('published_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Créer l'article</button>
                    <a href="{{ route('actualite.index') }}" class="btn btn-secondary ml-3">Annuler</a>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>
