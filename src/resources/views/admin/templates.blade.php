@extends('layouts.admin.main')
          
@section('title', 'Admin Panel - Templates')
@section('content') 
            <div class="content-wrapper">
                <div class="page-header">
                    <h1>Document Templates</h1>
                    <div class="actions">
                        <button class="btn btn-primary">Create New Template</button>
                    </div>
                </div>
                
                <!-- Filter Options -->
                <div class="filter-section">
                    <div class="filter-group">
                        <label for="category">Category</label>
                        <select id="category">
                            <option value="">All Categories</option>
                            <option value="financial">Financial</option>
                            <option value="legal">Legal</option>
                            <option value="marketing">Marketing</option>
                            <option value="hr">HR</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="status">Status</label>
                        <select id="status">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="draft">Draft</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    <div class="filter-group search">
                        <label for="templateSearch">Search</label>
                        <input type="text" id="templateSearch" placeholder="Search templates...">
                    </div>
                </div>
                
                <!-- Templates Grid -->
                <div class="template-list">
                    <div class="template-card">
                        <div class="template-preview">📄</div>
                        <div class="template-info">
                            <h3>Invoice Template</h3>
                            <p>Standard invoice format with company branding</p>
                            <div class="template-meta">
                                <span>Financial</span>
                                <span>Last updated: 2 days ago</span>
                            </div>
                            <div class="template-actions">
                                <button class="btn btn-primary">Use</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="template-card">
                        <div class="template-preview">📄</div>
                        <div class="template-info">
                            <h3>Service Agreement</h3>
                            <p>Legal contract for service agreements</p>
                            <div class="template-meta">
                                <span>Legal</span>
                                <span>Last updated: 1 week ago</span>
                            </div>
                            <div class="template-actions">
                                <button class="btn btn-primary">Use</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="template-card">
                        <div class="template-preview">📄</div>
                        <div class="template-info">
                            <h3>Project Proposal</h3>
                            <p>Detailed project proposal with cost breakdown</p>
                            <div class="template-meta">
                                <span>Marketing</span>
                                <span>Last updated: 2 weeks ago</span>
                            </div>
                            <div class="template-actions">
                                <button class="btn btn-primary">Use</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="template-card">
                        <div class="template-preview">📄</div>
                        <div class="template-info">
                            <h3>Employment Contract</h3>
                            <p>Standard employment agreement with terms</p>
                            <div class="template-meta">
                                <span>HR</span>
                                <span>Last updated: 1 month ago</span>
                            </div>
                            <div class="template-actions">
                                <button class="btn btn-primary">Use</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="template-card">
                        <div class="template-preview">📄</div>
                        <div class="template-info">
                            <h3>Financial Report</h3>
                            <p>Quarterly financial report template</p>
                            <div class="template-meta">
                                <span>Financial</span>
                                <span>Last updated: 1 month ago</span>
                            </div>
                            <div class="template-actions">
                                <button class="btn btn-primary">Use</button>
                                <button class="btn-icon edit">✏️</button>
                                <button class="btn-icon delete">🗑️</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="template-card">
                        <div class="template-preview">📄</div>
                        <div class="template-info">
                            <h3>Marketing Campaign</h3>
                            <p>Campaign planning document with timeline</p>
                            <div class="template-meta">
                                <span>Marketing</span>
                                <span>Last updated: 2 months ago</span>
                            </div>
                            <div class="template-actions">
                                <button class="btn btn-primary">Use</button>
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
                    </div>
                    <button class="btn-page">Next</button>
                </div>
            </div>
@endsection