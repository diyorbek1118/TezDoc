@extends('layouts.admin.main')
          
@section('title', 'Admin Panel - Profile')
@section('content')
            <div class="content-wrapper">
                <div class="page-header">
                    <h1>Profile</h1>
                    <div class="actions">
                        <button class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
                
                <div class="profile-container">
                    <div class="profile-sidebar">
                        <div class="profile-avatar">A</div>
                        <div class="profile-info">
                            <h2>Admin User</h2>
                            <p>Administrator</p>
                        </div>
                        
                        <div class="profile-stats">
                            <div class="stat-item">
                                <h4>12</h4>
                                <p>Documents</p>
                            </div>
                            <div class="stat-item">
                                <h4>5</h4>
                                <p>Templates</p>
                            </div>
                        </div>
                        
                        <div class="profile-nav">
                            <a href="#" class="active">General Information</a>
                            <a href="#">Security Settings</a>
                            <a href="#">Notifications</a>
                            <a href="#">Activity Log</a>
                        </div>
                    </div>
                    
                    <div class="profile-main">
                        <div class="form-section">
                            <h3>Personal Information</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" id="firstName" class="form-control" value="Admin">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" id="lastName" class="form-control" value="User">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="form-control" value="admin@example.com">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="form-control" value="+1 (123) 456-7890">
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Account Settings</h3>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control" value="admin_user">
                            </div>
                            <div class="form-group">
                                <label for="language">Language</label>
                                <select id="language" class="form-control">
                                    <option value="en" selected>English</option>
                                    <option value="fr">French</option>
                                    <option value="es">Spanish</option>
                                    <option value="de">German</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="timezone">Timezone</label>
                                <select id="timezone" class="form-control">
                                    <option value="utc" selected>UTC (Coordinated Universal Time)</option>
                                    <option value="est">EST (Eastern Standard Time)</option>
                                    <option value="cst">CST (Central Standard Time)</option>
                                    <option value="pst">PST (Pacific Standard Time)</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Notification Preferences</h3>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" checked> Email notifications for new users
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" checked> Email notifications for new documents
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox"> Email notifications for system updates
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" checked> Browser notifications
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection