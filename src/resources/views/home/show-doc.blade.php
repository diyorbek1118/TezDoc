@php
use Illuminate\Support\Str;
@endphp

@extends('layout.main')
  
@section('content')
    
@section('title', 'Show All Documents')

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.docs-container {
  font-family: 'Google Sans', 'Roboto', Arial, sans-serif;
  background-color: #fff;
  color: #202124;
  padding: 100px 50px 50px 50px;
}

/* HEADER SECTION */
.docs-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 30px 400px;
  border-bottom: 1px solid #dadce0;
  flex-wrap: wrap;
  gap: 12px;
}

.docs-header-left {
  display: flex;
  align-items: center;
  gap: 16px;
}

.docs-header-title {
  font-size: 18px;
  color: #5f6368;
  font-weight: 400;
}

.docs-header-right {
  display: flex;
  align-items: center;
  gap: 10px;
  position: relative;
}

/* DROPDOWN */
.owner-dropdown {
  background: white;
  border: 1px solid #ddd;
  padding: 10px 14px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 500;
  transition: all 0.2s ease;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  white-space: nowrap;
}

.owner-dropdown:hover {
  background: #f1f3f4;
}

.icon-btn {
  background: white;
  border: 1px solid #ddd;
  border-radius: 50%;
  width: 35px;
  height: 35px;
  font-size: 18px;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0,0,0,0.05);
  transition: all 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-btn:hover {
  background: #f1f3f4;
}

.dropdown-menu {
  position: absolute;
  top: 50px;
  left: 0;
  background: white;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
  width: 180px;
  display: none;
  flex-direction: column;
  overflow: hidden;
  animation: fadeIn 0.2s ease;
  z-index: 99;
}

.dropdown-item {
  padding: 10px 15px;
  cursor: pointer;
  transition: all 0.2s;
  text-decoration: none;
  color: #202124;
  display: block;
}

.dropdown-item:hover {
  background: #f1f3f4;
}

@keyframes fadeIn {
  from {opacity: 0; transform: translateY(-10px);}
  to {opacity: 1; transform: translateY(0);}
}

/* TEMPLATES SECTION */
.templates {
  background-color: #f8f9fa;
  padding: 40px 0;
  border-bottom: 1px solid #dadce0;
  overflow-x: auto;
  overflow-y: hidden;
}

.templates::-webkit-scrollbar {
  height: 8px;
}

.templates::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 4px;
}

.templates::-webkit-scrollbar-thumb:hover {
  background: #999;
}

.template-grid {
  display: flex;
  gap: 16px;
  padding: 10px 20px;
  width: max-content;
  margin: 0 auto;
}

.template-card {
  flex: 0 0 150px;
  display: inline-block;
  background: white;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  padding: 10px;
  cursor: pointer;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.template-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.template-predocs-view {
  width: 100%;
  height: 140px;
  border: 1px solid #dadce0;
  border-radius: 4px;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 8px;
  overflow: hidden;
}

.template-predocs-view.blank::before {
  content: '';
  width: 50px;
  height: 50px;
  background: linear-gradient(to right, #4285f4 0%, #4285f4 25%, #ea4335 25%, #ea4335 50%, #fbbc04 50%, #fbbc04 75%, #34a853 75%, #34a853 100%);
}

.template-predocs-view img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.template-name {
  font-size: 14px;
  color: #202124;
  margin-bottom: 4px;
  font-weight: 600;
  text-align: center;
}

.template-type {
  font-size: 12px;
  color: #5f6368;
  text-align: center;
}

/* RECENT DOCUMENTS SECTION */
.recent-section {
  padding: 60px 24px;
}

.documents-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 16px;
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 20px;
}

.document-card {
  border: 1px solid #dadce0;
  border-radius: 2px;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.2s;
  display: inline-block;
}

.document-card:hover {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.document-predocs-view {
  width: 100%;
  height: 280px;
  background: white;
  border-bottom: 1px solid #dadce0;
}

.document-predocs-view img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.document-info {
  padding: 12px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: white;
}

.document-details {
  display: flex;
  align-items: center;
  gap: 8px;
  min-width: 0;
  flex: 1;
}

.doc-icon {
  width: 16px;
  height: 16px;
  color: #4285f4;
  flex-shrink: 0;
}

.document-title {
  font-size: 14px;
  color: #202124;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.document-meta {
  font-size: 12px;
  color: #5f6368;
  margin-top: 2px;
}

.more-btn {
  width: 32px;
  height: 32px;
  border: none;
  background: none;
  cursor: pointer;
  border-radius: 50%;
  flex-shrink: 0;
}

.more-btn:hover {
  background: #f1f3f4;
}

/* ==================== RESPONSIVE ==================== */

/* Large Desktop */
@media (max-width: 1400px) {
  .docs-header {
    padding: 30px 300px;
  }
}

@media (max-width: 1200px) {
  .docs-header {
    padding: 30px 150px;
  }
  .docs-container {
    padding: 80px 40px 40px 40px;
  }
}

/* Tablet */
@media (max-width: 992px) {
  .docs-header {
    padding: 20px 80px;
  }
  .docs-container {
    padding: 60px 30px 30px 30px;
  }
  .recent-section {
    padding: 50px 20px;
  }
  .documents-grid {
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  }
}

/* Small Tablet */
@media (max-width: 768px) {
  .docs-header {
    padding: 20px 40px;
  }
  .docs-container {
    padding: 50px 20px 20px 20px;
  }
  .recent-section {
    padding: 40px 16px;
  }
  .templates {
    padding: 30px 0;
  }
  .template-grid {
    padding: 10px 15px;
  }
  .template-card {
    flex: 0 0 130px;
  }
  .template-predocs-view {
    height: 120px;
  }
  .documents-grid {
    grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
    gap: 12px;
  }
  .document-predocs-view {
    height: 240px;
  }
}

/* Mobile Large */
@media (max-width: 640px) {
  .docs-header {
    padding: 15px 20px;
    flex-direction: column;
    align-items: flex-start;
    position: relative;
  }
  .docs-header-right {
    width: 100%;
    justify-content: space-between;
  }
  .docs-container {
    padding: 120px 15px 20px 15px;
  }
  .templates {
    padding: 25px 0;
    margin-top: 20px;
  }
  .template-grid {
    padding: 10px 15px;
    gap: 14px;
  }
  .template-card {
    flex: 0 0 120px;
  }
  .template-predocs-view {
    height: 110px;
  }
  .template-name {
    font-size: 13px;
  }
  .template-type {
    font-size: 11px;
  }
  .documents-grid {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 10px;
    padding: 0 10px;
  }
  .document-predocs-view {
    height: 200px;
  }
  .document-title {
    font-size: 13px;
  }
  .owner-dropdown {
    font-size: 13px;
    padding: 8px 12px;
  }
  .recent-section {
    padding: 40px 16px;
    margin-top: 20px;
  }
}

/* Mobile Small */
@media (max-width: 480px) {
  .docs-header {
    padding: 12px 16px;
    position: relative;
  }
  .docs-container {
    padding: 140px 10px 15px 10px;
  }
  .recent-section {
    padding: 30px 12px;
    margin-top: 20px;
  }
  .templates {
    padding: 20px 0;
    margin-top: 20px;
  }
  .template-grid {
    gap: 12px;
    padding: 10px 12px;
  }
  .template-card {
    flex: 0 0 110px;
  }
  .template-predocs-view {
    height: 100px;
  }
  .documents-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 8px;
  }
  .document-predocs-view {
    height: 180px;
  }
  .document-info {
    padding: 10px;
  }
  .icon-btn {
    width: 32px;
    height: 32px;
    font-size: 16px;
  }
  .owner-dropdown {
    font-size: 12px;
    padding: 7px 10px;
  }
}

/* Mobile Extra Small */
@media (max-width: 360px) {
  .docs-container {
    padding: 150px 8px 10px 8px;
  }
  .templates {
    padding: 15px 0;
    margin-top: 20px;
  }
  .template-grid {
    padding: 10px 10px;
    gap: 10px;
  }
  .template-card {
    flex: 0 0 100px;
  }
  .template-predocs-view {
    height: 90px;
  }
  .documents-grid {
    gap: 6px;
  }
  .document-predocs-view {
    height: 160px;
  }
  .recent-section {
    margin-top: 20px;
  }
}
</style>

<div class="docs-container">
  <div class="docs-header">
    <div class="docs-header-left">
      <div class="docs-header-title">Oxirgi yaratilganlar</div>
    </div>
    <div class="docs-header-right">
      <div class="owner-dropdown" id="dropdownToggle">Oxirgi shablonlar ⌄</div>
      <button class="icon-btn">⋮</button>
      <div class="dropdown-menu" id="dropdownMenu">
        <a href="{{ route('templates.index', ['filter' => 'all']) }}" class="dropdown-item">Hammasi</a>
        <a href="{{ route('templates.index', ['filter' => 'applications']) }}" class="dropdown-item">Arizalar</a>
        <a href="{{ route('templates.index', ['filter' => 'personal']) }}" class="dropdown-item">Shaxsiy</a>
        <a href="{{ route('templates.index', ['filter' => 'contracts']) }}" class="dropdown-item">Shartnomalar</a>
      </div>
    </div>
  </div>
</div>

<div class="templates">
  <div class="template-grid">
    <a class="template-card" href="">
      <div class="template-predocs-view blank"></div>
      <div class="template-name">Пустой документ</div>
    </a>
    <a class="template-card"  href="">
      <div class="template-predocs-view">
        <svg width="100" height="140" viewBox="0 0 100 140">
          <rect fill="#f8f9fa" width="100" height="140"/>
          <rect fill="#dadce0" x="15" y="15" width="70" height="4"/>
          <rect fill="#dadce0" x="15" y="25" width="70" height="4"/>
          <rect fill="#dadce0" x="15" y="35" width="50" height="4"/>
        </svg>
      </div>
      <div class="template-name">Письмо</div>
      <div class="template-type">Мята</div>
    </a>
    <a class="template-card"  href="">
      <div class="template-predocs-view">
        <svg width="100" height="140" viewBox="0 0 100 140">
          <rect fill="#f8f9fa" width="100" height="140"/>
          <rect fill="#dadce0" x="10" y="15" width="35" height="110"/>
          <rect fill="#dadce0" x="50" y="15" width="40" height="50"/>
        </svg>
      </div>
      <div class="template-name">Резюме</div>
      <div class="template-type">С засечками</div>
    </a>
    <a class="template-card"  href="">
      <div class="template-predocs-view">
        <svg width="100" height="140" viewBox="0 0 100 140">
          <rect fill="#f8f9fa" width="100" height="140"/>
          <rect fill="#ff6b6b" x="15" y="15" width="70" height="4"/>
          <rect fill="#dadce0" x="15" y="25" width="70" height="3"/>
          <rect fill="#dadce0" x="15" y="32" width="70" height="3"/>
        </svg>
      </div>
      <div class="template-name">Резюме</div>
      <div class="template-type">Коралл</div>
    </a>
    <a class="template-card"  href="">
      <div class="template-predocs-view">
        <svg width="100" height="140" viewBox="0 0 100 140">
          <polygon fill="#4db8a5" points="0,0 100,0 100,60 80,80 0,80"/>
          <polygon fill="#d4745f" points="0,80 80,80 100,60 100,140 0,140"/>
        </svg>
      </div>
      <div class="template-name">Проектное предл...</div>
      <div class="template-type">Тропики</div>
    </a>
    <a class="template-card"  href="">
      <div class="template-predocs-view">
        <svg width="100" height="140" viewBox="0 0 100 140">
          <rect fill="#f8f9fa" width="100" height="140"/>
          <polygon fill="#e91e63" points="80,100 100,100 100,140 80,140"/>
          <rect fill="#1a237e" x="20" y="40" width="40" height="50"/>
        </svg>
      </div>
      <div class="template-name">Брошюра</div>
      <div class="template-type">Геометрия</div>
    </a>
    <a class="template-card"  href="">
      <div class="template-predocs-view">
        <svg width="100" height="140" viewBox="0 0 100 140">
          <rect fill="#f8f9fa" width="100" height="140"/>
          <rect fill="#dadce0" x="20" y="60" width="60" height="50"/>
          <rect fill="#dadce0" x="15" y="20" width="70" height="3"/>
        </svg>
      </div>
      <div class="template-name">Доклад</div>
      <div class="template-type">Люкс</div>
    </a>
  </div>
</div>

<div class="recent-section">
  <div class="docs-header">
    <div class="docs-header-left">
      <div class="docs-header-title">Barcha Hujjat uchun shablonlar</div>
    </div>
    <div class="docs-header-right">
      <div class="owner-dropdown" id="dropdownToggle2">Barcha shablonlar ⌄</div>
      <button class="icon-btn">⋮</button>
      <div class="dropdown-menu" id="dropdownMenu2">
        <a href="{{ route('documents.index', ['filter' => 'all']) }}" class="dropdown-item">Hammasi</a>
        <a href="{{ route('documents.index', ['filter' => 'applications']) }}" class="dropdown-item">Arizalar</a>
        <a href="{{ route('documents.index', ['filter' => 'personal']) }}" class="dropdown-item">Shaxsiy</a>
        <a href="{{ route('documents.index', ['filter' => 'contracts']) }}" class="dropdown-item">Shartnomalar</a>
      </div>
    </div>
  </div>

  <div class="documents-grid">
    @foreach($doc_list as $document)
    <a class="document-card" href="{{ route('form.show', $document->id) }}">
        <div class="document-predocs-view" style="position: relative; width: 220px; height: 280px;">
            <svg width="100%" height="100%" viewBox="0 0 220 280">
                <rect fill="white" width="220" height="280"/>
            </svg>
            <!-- Plus icon -->
            <div style="
                position: absolute;
                top: 50%;
                left: 60%;
                transform: translate(-50%, -50%);
                width: 70px;
                height: 70px;
                background-color: #4CAF50;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 52px;
                color: white;
                cursor: pointer;
            ">
                +
            </div>
        </div> 

        <div class="document-info">
            <div class="document-details">
                <svg class="doc-icon" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                </svg>
                <div>
                    <div class="document-title">{{ Str::limit($document->title, 25) }}</div>
                    <div class="document-meta">
                        Yaratilgan: {{ $document->created_at->format('d.m.Y H:i') }}
                    </div>
                </div>
            </div>
            <button class="more-btn">⋮</button>
        </div>
    </a>
    @endforeach
</div>

</div>

<script>
const toggle = document.getElementById('dropdownToggle');
const menu = document.getElementById('dropdownMenu');

toggle.addEventListener('click', (e) => {
  e.stopPropagation();
  menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
  document.getElementById('dropdownMenu2').style.display = 'none';
});

const toggle2 = document.getElementById('dropdownToggle2');
const menu2 = document.getElementById('dropdownMenu2');

toggle2.addEventListener('click', (e) => {
  e.stopPropagation();
  menu2.style.display = menu2.style.display === 'flex' ? 'none' : 'flex';
  menu.style.display = 'none';
});

document.addEventListener('click', () => {
  menu.style.display = 'none';
  menu2.style.display = 'none';
});

menu.addEventListener('click', (e) => {
  e.stopPropagation();
});

menu2.addEventListener('click', (e) => {
  e.stopPropagation();
});
</script>

@endsection