
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter un Freelancer</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('freelancers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="logo">Logo:</label>
                            <input type="file" name="logo" class="form-control-file" id="logo">
                        </div>

                        <div class="form-group">
                            <label for="experience">Expérience:</label>
                            <input type="text" name="experience" class="form-control" id="experience">
                        </div>

                        <div class="form-group">
                            <label for="discreption">Description:</label>
                            <textarea name="discreption" class="form-control" id="discreption"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

