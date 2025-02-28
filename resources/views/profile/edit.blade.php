<x-layout>
    <h4 class="page-title">Edit Profile</h4>



    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit profile</div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="placeholder">Email</label>
                                    <input id="email" value="{{ $user->email }}" type="text"
                                        class="form-control input-border-bottom" disabled readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="placeholder">Full Name</label>
                                    <input id="name" name="name" value="{{ old('name') ?? $user->name }}"
                                        type="text" class="form-control input-border-bottom" required="">
                                </div>
                                @error('name')
                                    <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                                @enderror

                                <div class="form-group">
                                    <label for="password" class="placeholder">New Password</label>
                                    <input id="password" value="{{ old('password') ?? '' }}" name="password"
                                        type="password" class="form-control input-border-bottom">

                                </div>
                                @error('password')
                                    <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                                @enderror

                                <div class="form-group">
                                    <label for="image">Profile Image</label>
                                    <input type="file" name='image' class="form-control-file" id="image">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" style="display: grid">
                                    <label for="image">Profile Image</label>
                                    <img src="{{ $user->image ? asset('storage/profiles/' . $user->image) : asset('assets/img/profile.jpg') }}"
                                        alt="profile image" class="img-thumbnail" id="image" />
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-action">
                    <button type='submit' class="btn btn-success float-right ml-2">Submit</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-danger float-right">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
