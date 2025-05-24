@extends('layouts.admin.main')
          
@section('title', 'Admin Panel - Profile')
@section('content')
            
            <div class="content-wrapper">
                <div class="page-header">
                    <h1>Users Management</h1>
                    <div class="actions">
                        <button class="btn btn-primary">Add New User</button>
                    </div>
                </div>
                
                <!-- Users Filter -->
                <div class="filter-section">
                    <div class="filter-group">
                        <label for="role">Role</label>
                        <select id="role">
                            <option value="">All Roles</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="status">Status</label>
                        <select id="status">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="filter-group search">
                        <label for="search">Search</label>
                        <input type="text" id="search" placeholder="Search users...">
                    </div>
                </div>
                
                <!-- Users Table -->
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Last Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">JD</div>
                                        <div class="user-info">
                                            <h4>John Doe</h4>
                                            <p>ID: #12345</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Admin</td>
                                <td>john.doe@example.com</td>
                                <td><span class="status active">Active</span></td>
                                <td>Today, 10:30 AM</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon edit">✏️</button>
                                        <button class="btn-icon delete">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">SJ</div>
                                        <div class="user-info">
                                            <h4>Sarah Johnson</h4>
                                            <p>ID: #12346</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Manager</td>
                                <td>sarah.j@example.com</td>
                                <td><span class="status active">Active</span></td>
                                <td>Today, 09:15 AM</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon edit">✏️</button>
                                        <button class="btn-icon delete">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">MS</div>
                                        <div class="user-info">
                                            <h4>Michael Smith</h4>
                                            <p>ID: #12347</p>
                                        </div>
                                    </div>
                                </td>
                                <td>User</td>
                                <td>m.smith@example.com</td>
                                <td><span class="status inactive">Inactive</span></td>
                                <td>Yesterday, 14:22 PM</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon edit">✏️</button>
                                        <button class="btn-icon delete">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">EW</div>
                                        <div class="user-info">
                                            <h4>Emma Wilson</h4>
                                            <p>ID: #12348</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Manager</td>
                                <td>e.wilson@example.com</td>
                                <td><span class="status active">Active</span></td>
                                <td>Today, 11:05 AM</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon edit">✏️</button>
                                        <button class="btn-icon delete">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-cell">
                                        <div class="avatar">RB</div>
                                        <div class="user-info">
                                            <h4>Robert Brown</h4>
                                            <p>ID: #12349</p>
                                        </div>
                                    </div>
                                </td>
                                <td>User</td>
                                <td>r.brown@example.com</td>
                                <td><span class="status active">Active</span></td>
                                <td>Yesterday, 16:45 PM</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-icon edit">✏️</button>
                                        <button class="btn-icon delete">🗑️</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="pagination">
                    <button class="btn-page">Previous</button>
                    <div class="page-numbers">
                        <button class="btn-page active">1</button>
                        <button class="btn-page">2</button>
                        <button class="btn-page">3</button>
                        <span>...</span>
                        <button class="btn-page">10</button>
                    </div>
                    <button class="btn-page">Next</button>
                </div>
            </div>
@endsection