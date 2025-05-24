@extends('layouts.admin.main')
          
@section('title', 'Admin Panel - Documents')
@section('content')
            <div class="content-wrapper">
                <div class="page-header">
                    <h1>Documents</h1>
                    <div class="actions">
                        <button class="btn btn-primary">Add New Document</button>
                    </div>
                </div>
                
                <!-- Filter Options -->
                <div class="filter-section">
                    <div class="filter-group">
                        <label for="type">Document Type</label>
                        <select id="type">
                            <option value="">All Types</option>
                            <option value="report">Report</option>
                            <option value="invoice">Invoice</option>
                            <option value="contract">Contract</option>
                            <option value="proposal">Proposal</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="dateRange">Date Range</label>
                        <select id="dateRange">
                            <option value="all">All Time</option>
                            <option value="today">Today</option>
                            <option value="week">This Week</option>
                            <option value="month">This Month</option>
                            <option value="year">This Year</option>
                        </select>
                    </div>
                    <div class="filter-group search">
                        <label for="docSearch">Search</label>
                        <input type="text" id="docSearch" placeholder="Search documents...">
                    </div>
                </div>
                
                <!-- Documents Grid -->
                <div class="document-grid">
                    <div class="document-card">
                        <div class="document-icon">📊</div>
                        <div class="document-info">
                            <h3>Q2 Financial Report</h3>
                            <p>Quarterly financial analysis report</p>
                            <div class="document-meta">
                                <div class="document-user">
                                    <div class="avatar">JD</div>
                                    <div class="name">John Doe</div>
                                </div>
                                <div class="document-date">Today</div>
                            </div>
                            <div class="document-actions">
                                <button class="btn btn-primary">View</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="document-card">
                        <div class="document-icon">📝</div>
                        <div class="document-info">
                            <h3>Project Proposal</h3>
                            <p>New project proposal for client XYZ</p>
                            <div class="document-meta">
                                <div class="document-user">
                                    <div class="avatar">SJ</div>
                                    <div class="name">Sarah Johnson</div>
                                </div>
                                <div class="document-date">Yesterday</div>
                            </div>
                            <div class="document-actions">
                                <button class="btn btn-primary">View</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="document-card">
                        <div class="document-icon">📜</div>
                        <div class="document-info">
                            <h3>Service Contract</h3>
                            <p>Service agreement contract for ABC Corp</p>
                            <div class="document-meta">
                                <div class="document-user">
                                    <div class="avatar">MS</div>
                                    <div class="name">Michael Smith</div>
                                </div>
                                <div class="document-date">2 days ago</div>
                            </div>
                            <div class="document-actions">
                                <button class="btn btn-primary">View</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="document-card">
                        <div class="document-icon">🧾</div>
                        <div class="document-info">
                            <h3>Invoice #2854</h3>
                            <p>Monthly services invoice for client DEF</p>
                            <div class="document-meta">
                                <div class="document-user">
                                    <div class="avatar">EW</div>
                                    <div class="name">Emma Wilson</div>
                                </div>
                                <div class="document-date">1 week ago</div>
                            </div>
                            <div class="document-actions">
                                <button class="btn btn-primary">View</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="document-card">
                        <div class="document-icon">📋</div>
                        <div class="document-info">
                            <h3>Product Roadmap</h3>
                            <p>Product development roadmap for Q3</p>
                            <div class="document-meta">
                                <div class="document-user">
                                    <div class="avatar">RB</div>
                                    <div class="name">Robert Brown</div>
                                </div>
                                <div class="document-date">2 weeks ago</div>
                            </div>
                            <div class="document-actions">
                                <button class="btn btn-primary">View</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="document-card">
                        <div class="document-icon">📑</div>
                        <div class="document-info">
                            <h3>Meeting Minutes</h3>
                            <p>Minutes from the quarterly board meeting</p>
                            <div class="document-meta">
                                <div class="document-user">
                                    <div class="avatar">JD</div>
                                    <div class="name">John Doe</div>
                                </div>
                                <div class="document-date">3 weeks ago</div>
                            </div>
                            <div class="document-actions">
                                <button class="btn btn-primary">View</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
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