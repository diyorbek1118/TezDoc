@extends('layout.admin.main')

@section('title', 'Admin Panel')

@section('content')
<div class="content-wrapper">
    <!-- Page Header -->
    <div class="page-header">
        <h1>Dashboard</h1>
        <p>Welcome to your admin dashboard</p>
    </div>
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon users">👥</div>
                        <div class="stat-info">
                            <h3>Total Users</h3>
                            <p class="stat-value">1,256</p>
                            <p class="stat-change positive">+12% from last month</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon documents">📄</div>
                        <div class="stat-info">
                            <h3>Documents</h3>
                            <p class="stat-value">854</p>
                            <p class="stat-change positive">+5% from last month</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon templates">📝</div>
                        <div class="stat-info">
                            <h3>Templates</h3>
                            <p class="stat-value">36</p>
                            <p class="stat-change">No change</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon activity">📈</div>
                        <div class="stat-info">
                            <h3>Activity</h3>
                            <p class="stat-value">234</p>
                            <p class="stat-change negative">-2% from last month</p>
                        </div>
                    </div>
                </div>
                
                <!-- Charts Section -->
                <div class="charts-section">
                    <div class="chart-card wide">
                        <div class="chart-header">
                            <h3>User Activity</h3>
                            <div class="chart-actions">
                                <select>
                                    <option>This Week</option>
                                    <option>This Month</option>
                                    <option>This Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="chart-content">
                            <div class="chart-placeholder">
                                <div class="bar-chart">
                                    <div class="bar" style="height: 60%;"><span>Mon</span></div>
                                    <div class="bar" style="height: 80%;"><span>Tue</span></div>
                                    <div class="bar" style="height: 65%;"><span>Wed</span></div>
                                    <div class="bar" style="height: 90%;"><span>Thu</span></div>
                                    <div class="bar" style="height: 75%;"><span>Fri</span></div>
                                    <div class="bar" style="height: 40%;"><span>Sat</span></div>
                                    <div class="bar" style="height: 30%;"><span>Sun</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3>User Distribution</h3>
                        </div>
                        <div class="chart-content">
                            <div class="pie-chart-container">
                                <div class="pie-chart">
                                    <div class="pie-segment blue" style="--offset: 0; --value: 40"></div>
                                    <div class="pie-segment green" style="--offset: 40; --value: 30"></div>
                                    <div class="pie-segment orange" style="--offset: 70; --value: 20"></div>
                                    <div class="pie-segment purple" style="--offset: 90; --value: 10"></div>
                                </div>
                                <div class="pie-legend">
                                    <div class="legend-item"><span class="color-dot blue"></span> Admins (40%)</div>
                                    <div class="legend-item"><span class="color-dot green"></span> Managers (30%)</div>
                                    <div class="legend-item"><span class="color-dot orange"></span> Users (20%)</div>
                                    <div class="legend-item"><span class="color-dot purple"></span> Guests (10%)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="recent-section">
                    <div class="section-header">
                        <h2>Recent Activity</h2>
                        <button class="view-all">View All</button>
                    </div>
                    
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">📄</div>
                            <div class="activity-details">
                                <h4>New Document Created</h4>
                                <p>John Doe created a new document: "Q2 Financial Report"</p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">👥</div>
                            <div class="activity-details">
                                <h4>New User Registered</h4>
                                <p>Sarah Johnson joined the platform</p>
                                <span class="activity-time">5 hours ago</span>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">📝</div>
                            <div class="activity-details">
                                <h4>Template Updated</h4>
                                <p>Invoice Template was updated by Admin</p>
                                <span class="activity-time">Yesterday</span>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">⚙️</div>
                            <div class="activity-details">
                                <h4>System Update</h4>
                                <p>The system was updated to version 2.3.1</p>
                                <span class="activity-time">2 days ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
@endsection