@extends('Backend.Layout.App')

@section('content')
<div class="main-content">
    <div class="page-header">
        <div class="header-title">
            <h1>Add New User</h1>
            <p class="text-muted">Create a new user account in the system</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12">
            <div class="card custom-card">
                <div class="card-header bg-gradient-primary text-white">
                    <div class="d-flex align-items-center">
                        <div class="card-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="card-title">
                            <h5 class="mb-0">User Information</h5>
                            <p class="mb-0 opacity-75">Fill in the details to create a new user</p>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.create') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <!-- Username -->
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">
                                    Username <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input 
                                        type="text" 
                                        class="form-control @error('username') is-invalid @enderror" 
                                        id="username" 
                                        name="username" 
                                        value="{{ old('username') }}" 
                                        placeholder="Enter username" 
                                        required
                                    >
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">
                                    Phone Number <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input 
                                        type="text" 
                                        class="form-control @error('phone') is-invalid @enderror" 
                                        id="phone" 
                                        name="phone" 
                                        value="{{ old('phone') }}" 
                                        placeholder="Enter phone number" 
                                        required
                                    >
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Phone -->
                     <div class="col-md-6 mb-3">
    <label for="role" class="form-label">
        Assign Role <span class="text-danger">*</span>
    </label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="fas fa-user-shield"></i>
        </span>
        <select 
            class="form-control @error('role') is-invalid @enderror" 
            id="role" 
            name="role" 
            required
        >
            <option value="" disabled selected>Select Role</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Staff</option>
        </select>
        @error('role')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input 
                                    type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email') }}" 
                                    placeholder="Enter email address"
                                >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Profile Image Upload -->
<div class="mb-3">
    <label for="image" class="form-label">Profile Image</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="fas fa-image"></i>
        </span>
        <input 
            type="file" 
            class="form-control @error('image') is-invalid @enderror" 
            id="image" 
            name="image" 
            accept="image/*"
        >
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-text">Leave blank to use default avatar</div>
</div>


                        <!-- Note -->
                        <div class="mb-3">
                            <label for="note" class="form-label">Notes</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-sticky-note"></i>
                                </span>
                                <textarea 
                                    class="form-control @error('note') is-invalid @enderror" 
                                    id="note" 
                                    name="note" 
                                    rows="3" 
                                    placeholder="Enter any notes about this user"
                                >{{ old('note') }}</textarea>
                                @error('note')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Password -->
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">
                                    Password <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input 
                                        type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        id="password" 
                                        name="password" 
                                        placeholder="Enter password" 
                                        required
                                    >
                                    <button type="button" class="btn btn-outline-secondary toggle-password" data-target="password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="password-strength mt-2">
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-6 mb-3">
                                <label for="password_confirmation" class="form-label">
                                    Confirm Password <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input 
                                        type="password" 
                                        class="form-control" 
                                        id="password_confirmation" 
                                        name="password_confirmation" 
                                        placeholder="Confirm password" 
                                        required
                                    >
                                    <button type="button" class="btn btn-outline-secondary toggle-password" data-target="password_confirmation">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="form-actions mt-4 pt-3 border-top">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('user.list') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Back to Users
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-2"></i>Create User
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.main-content {
    padding: 20px;
    background: #f8f9fa;
    min-height: calc(100vh - 70px);
}

.page-header {
    background: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    justify-content: between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.header-title h1 {
    font-size: 24px;
    font-weight: 600;
    color: #2c3e50;
    margin: 0;
}

.header-title p {
    margin: 5px 0 0 0;
    color: #6c757d;
}

.breadcrumb {
    margin: 0;
    padding: 0;
    background: transparent;
}

.custom-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    overflow: hidden;
}

.card-header.bg-gradient-primary {
    background: linear-gradient(135deg, #02074b 0%, #02074b 100%) !important;
    border: none;
    padding: 25px 30px;
}

.card-icon {
    width: 50px;
    height: 50px;
    background: #02074b;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}

.card-icon i {
    font-size: 24px;
    color: #02074b;
}

.card-title h5 {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
}

.card-title p {
    margin: 5px 0 0 0;
    opacity: 0.9;
}

.card-body {
    padding: 30px;
}

.form-label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 8px;
}

.input-group-text {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-right: none;
}

.form-control {
    border: 1px solid #e9ecef;
    padding: 12px 15px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

.input-group .form-control {
    border-left: none;
}

.input-group .input-group-text {
    border-right: none;
}

.toggle-password {
    border: 1px solid #e9ecef;
    border-left: none;
}

.password-strength .progress {
    border-radius: 4px;
}

.progress-bar {
    transition: width 0.3s ease;
}

.form-actions {
    padding-top: 20px;
}

.btn {
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-success {
    background: linear-gradient(135deg, #02074b 0%, #02074b 100%);
    border: none;
}

.btn-success:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
}

.btn-outline-secondary:hover {
    transform: translateY(-2px);
}

.invalid-feedback {
    display: block;
    margin-top: 5px;
}

.form-text {
    font-size: 12px;
    color: #6c757d;
    margin-top: 5px;
}

@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .card-body {
        padding: 20px;
    }
    
    .row {
        margin-left: -10px;
        margin-right: -10px;
    }
    
    .col-md-6 {
        padding-left: 10px;
        padding-right: 10px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Password visibility toggle
    const toggleButtons = document.querySelectorAll('.toggle-password');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const target = this.getAttribute('data-target');
            const input = document.getElementById(target);
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });

    // Password strength indicator
    const passwordInput = document.getElementById('password');
    const strengthBar = document.querySelector('.progress-bar');
    
    passwordInput.addEventListener('input', function() {
        const password = this.value;
        let strength = 0;
        
        if (password.length >= 8) strength += 25;
        if (password.match(/[a-z]+/)) strength += 25;
        if (password.match(/[A-Z]+/)) strength += 25;
        if (password.match(/[0-9]+/)) strength += 25;
        
        strengthBar.style.width = strength + '%';
        
        if (strength < 50) {
            strengthBar.className = 'progress-bar bg-danger';
        } else if (strength < 75) {
            strengthBar.className = 'progress-bar bg-warning';
        } else {
            strengthBar.className = 'progress-bar bg-success';
        }
    });

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
});
</script>
@endsection