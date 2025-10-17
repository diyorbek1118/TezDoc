<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Docs - Asosiy sahifa</title>
    <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Google Sans', 'Roboto', Arial, sans-serif;
  background-color: #fff;
  color: #202124;
  padding: 100px 50px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 400px;
  border-bottom: 1px solid #dadce0;
  flex-wrap: wrap;
  gap: 12px;
}

.header-left {
  display: flex;
  align-items: center;
  gap: 16px;
}

.header-title {
  font-size: 18px;
  color: #5f6368;
  font-weight: 400;
}

.header-right {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

.template-gallery {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 16px 24px;
  cursor: pointer;
}

.template-gallery span {
  font-size: 14px;
  color: #5f6368;
}

.template-gallery-icon {
  width: 20px;
  height: 20px;
  transform: rotate(90deg);
}

.templates {
  background-color: #f8f9fa;
  padding: 60px 0;
  border-bottom: 1px solid #dadce0;
  display: flex;
  justify-content: center;
}

.template-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
  gap: 16px;
  max-width: 1200px;
  width: 100%;
  padding: 0 20px;
}

.template-card {
  cursor: pointer;
  transition: all 0.2s;
}

.template-card:hover {
  transform: translateY(-2px);
}

.template-preview {
  width: 100%;
  height: 180px;
  border: 1px solid #dadce0;
  border-radius: 2px;
  background: white;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 8px;
  overflow: hidden;
}

.template-preview.blank {
  background: white;
}

.template-preview.blank::before {
  content: '';
  width: 50px;
  height: 50px;
  background: linear-gradient(to right, #4285f4 0%, #4285f4 25%, #ea4335 25%, #ea4335 50%, #fbbc04 50%, #fbbc04 75%, #34a853 75%, #34a853 100%);
}

.template-preview img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.template-name {
  font-size: 14px;
  color: #202124;
  margin-bottom: 4px;
}

.template-type {
  font-size: 12px;
  color: #5f6368;
}

.recent-section {
  padding: 100px 24px;
}

.recent-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
  padding: 10px 400px;
  flex-wrap: wrap;
  gap: 16px;
}

.recent-title {
  font-size: 16px;
  color: #202124;
  font-weight: 500;
}

.view-options {
  display: flex;
  gap: 8px;
}

.view-btn {
  width: 40px;
  height: 40px;
  border: none;
  background: none;
  cursor: pointer;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.view-btn:hover {
  background: #f1f3f4;
}

.owner-dropdown {
  padding: 8px 12px;
  border: 1px solid #dadce0;
  border-radius: 4px;
  background: white;
  cursor: pointer;
  font-size: 14px;
  color: #202124;
  white-space: nowrap;
}

.documents-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 16px;
  justify-content: center;
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
}

.document-card:hover {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.document-preview {
  width: 100%;
  height: 280px;
  background: white;
  border-bottom: 1px solid #dadce0;
}

.document-preview img {
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

.icon-btn {
  width: 40px;
  height: 40px;
  border: none;
  background: none;
  cursor: pointer;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-btn:hover {
  background: #f1f3f4;
}

/* 🔹 RESPONSIVE QISMI 🔹 */

/* Desktop - Large screens */
@media (max-width: 1400px) {
  .header, .recent-header {
    padding: 10px 300px;
  }
}

@media (max-width: 1200px) {
  .header, .recent-header {
    padding: 10px 150px;
  }
  body {
    padding: 80px 40px;
  }
}

/* Tablet - Medium screens */
@media (max-width: 992px) {
  .header, .recent-header {
    padding: 10px 80px;
  }
  body {
    padding: 60px 30px;
  }
  .recent-section {
    padding: 80px 20px;
  }
  .template-grid {
    grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
    gap: 14px;
  }
  .documents-grid {
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 14px;
  }
  .header-title {
    font-size: 16px;
  }
}

/* Tablet - Small screens */
@media (max-width: 768px) {
  .header, .recent-header {
    padding: 10px 40px;
  }
  body {
    padding: 50px 20px;
  }
  .recent-section {
    padding: 60px 16px;
  }
  .template-grid {
    grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
    gap: 12px;
  }
  .template-preview {
    height: 150px;
  }
  .documents-grid {
    grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
    gap: 12px;
  }
  .document-preview {
    height: 240px;
  }
  .owner-dropdown {
    font-size: 13px;
    padding: 6px 10px;
  }
  .view-btn {
    width: 36px;
    height: 36px;
  }
}

/* Mobile - Large */
@media (max-width: 640px) {
  .header {
    padding: 12px 20px;
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }
  .recent-header {
    padding: 12px 20px;
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }
  .recent-header > div {
    width: 100%;
    justify-content: space-between;
  }
  body {
    padding: 40px 10px;
  }
  .header-title {
    font-size: 15px;
  }
  .template-grid {
    grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
    gap: 10px;
  }
  .template-preview {
    height: 130px;
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
  }
  .document-preview {
    height: 200px;
  }
  .document-title {
    font-size: 13px;
  }
  .document-meta {
    font-size: 11px;
  }
  .recent-title {
    font-size: 15px;
  }
}

/* Mobile - Small */
@media (max-width: 480px) {
  .header, .recent-header {
    padding: 10px 16px;
  }
  body {
    padding: 30px 8px;
  }
  .recent-section {
    padding: 40px 12px;
  }
  .template-grid {
    grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
    gap: 8px;
  }
  .template-preview {
    height: 120px;
  }
  .documents-grid {
    grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
    gap: 8px;
  }
  .document-preview {
    height: 180px;
  }
  .document-info {
    padding: 10px;
  }
  .owner-dropdown {
    font-size: 12px;
    padding: 6px 8px;
  }
  .view-btn, .icon-btn {
    width: 32px;
    height: 32px;
  }
}

/* Mobile - Extra Small */
@media (max-width: 360px) {
  body {
    padding: 20px 6px;
  }
  .template-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 6px;
  }
  .documents-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 6px;
  }
  .document-preview {
    height: 160px;
  }
  .header-title {
    font-size: 14px;
  }
  .recent-title {
    font-size: 14px;
  }
}
    </style>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <div class="header-title">Создать документ</div>
        </div>
        <div class="header-right">
            <div class="owner-dropdown">Галерея шаблонов ⌄</div>
            <button class="icon-btn">⋮</button>
        </div>
    </div>

    <div class="templates">
        <div class="template-grid">
            <div class="template-card">
                <div class="template-preview blank"></div>
                <div class="template-name">Пустой документ</div>
            </div>
            <div class="template-card">
                <div class="template-preview">
                    <svg width="100" height="140" viewBox="0 0 100 140">
                        <rect fill="#f8f9fa" width="100" height="140"/>
                        <rect fill="#dadce0" x="15" y="15" width="70" height="4"/>
                        <rect fill="#dadce0" x="15" y="25" width="70" height="4"/>
                        <rect fill="#dadce0" x="15" y="35" width="50" height="4"/>
                    </svg>
                </div>
                <div class="template-name">Письмо</div>
                <div class="template-type">Мята</div>
            </div>
            <div class="template-card">
                <div class="template-preview">
                    <svg width="100" height="140" viewBox="0 0 100 140">
                        <rect fill="#f8f9fa" width="100" height="140"/>
                        <rect fill="#dadce0" x="10" y="15" width="35" height="110"/>
                        <rect fill="#dadce0" x="50" y="15" width="40" height="50"/>
                    </svg>
                </div>
                <div class="template-name">Резюме</div>
                <div class="template-type">С засечками</div>
            </div>
            <div class="template-card">
                <div class="template-preview">
                    <svg width="100" height="140" viewBox="0 0 100 140">
                        <rect fill="#f8f9fa" width="100" height="140"/>
                        <rect fill="#ff6b6b" x="15" y="15" width="70" height="4"/>
                        <rect fill="#dadce0" x="15" y="25" width="70" height="3"/>
                        <rect fill="#dadce0" x="15" y="32" width="70" height="3"/>
                    </svg>
                </div>
                <div class="template-name">Резюме</div>
                <div class="template-type">Коралл</div>
            </div>
            <div class="template-card">
                <div class="template-preview">
                    <svg width="100" height="140" viewBox="0 0 100 140">
                        <polygon fill="#4db8a5" points="0,0 100,0 100,60 80,80 0,80"/>
                        <polygon fill="#d4745f" points="0,80 80,80 100,60 100,140 0,140"/>
                    </svg>
                </div>
                <div class="template-name">Проектное предл...</div>
                <div class="template-type">Тропики</div>
            </div>
            <div class="template-card">
                <div class="template-preview">
                    <svg width="100" height="140" viewBox="0 0 100 140">
                        <rect fill="#f8f9fa" width="100" height="140"/>
                        <polygon fill="#e91e63" points="80,100 100,100 100,140 80,140"/>
                        <rect fill="#1a237e" x="20" y="40" width="40" height="50"/>
                    </svg>
                </div>
                <div class="template-name">Брошюра</div>
                <div class="template-type">Геометрия</div>
            </div>
            <div class="template-card">
                <div class="template-preview">
                    <svg width="100" height="140" viewBox="0 0 100 140">
                        <rect fill="#f8f9fa" width="100" height="140"/>
                        <rect fill="#dadce0" x="20" y="60" width="60" height="50"/>
                        <rect fill="#dadce0" x="15" y="20" width="70" height="3"/>
                    </svg>
                </div>
                <div class="template-name">Доклад</div>
                <div class="template-type">Люкс</div>
            </div>
        </div>
    </div>

    <div class="recent-section">
        <div class="recent-header">
            <h2 class="recent-title">Недавние документы</h2>
            <div style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                <div class="owner-dropdown">Владелец: кто угодно ▼</div>
                <div class="view-options">
                    <button class="view-btn">☰</button>
                    <button class="view-btn">⚏</button>
                    <button class="view-btn">▭</button>
                </div>
            </div>
        </div>

        <div class="documents-grid">
            <div class="document-card">
                <div class="document-preview">
                    <svg width="100%" height="100%" viewBox="0 0 220 280">
                        <rect fill="white" width="220" height="280"/>
                        <text x="110" y="140" text-anchor="middle" font-size="12" fill="#5f6368">Document Preview</text>
                    </svg>
                </div>
                <div class="document-info">
                    <div class="document-details">
                        <svg class="doc-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                        <div>
                            <div class="document-title">it loyihallarni boshqarish 1...</div>
                            <div class="document-meta">Просмотрено: 09:18</div>
                        </div>
                    </div>
                    <button class="more-btn">⋮</button>
                </div>
            </div>

            <div class="document-card">
                <div class="document-preview">
                    <svg width="100%" height="100%" viewBox="0 0 220 280">
                        <rect fill="white" width="220" height="280"/>
                        <text x="110" y="140" text-anchor="middle" font-size="12" fill="#5f6368">Document Preview</text>
                    </svg>
                </div>
                <div class="document-info">
                    <div class="document-details">
                        <svg class="doc-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                        <div>
                            <div class="document-title">63036430b2369dfe92170...</div>
                            <div class="document-meta">16 окт. 2025 г.</div>
                        </div>
                    </div>
                    <button class="more-btn">⋮</button>
                </div>
            </div>

            <div class="document-card">
                <div class="document-preview">
                    <svg width="100%" height="100%" viewBox="0 0 220 280">
                        <rect fill="white" width="220" height="280"/>
                        <text x="110" y="140" text-anchor="middle" font-size="12" fill="#5f6368">Document Preview</text>
                    </svg>
                </div>
                <div class="document-info">
                    <div class="document-details">
                        <svg class="doc-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                        <div>
                            <div class="document-title">c61682Bb-22a2-4571-9b9...</div>
                            <div class="document-meta">16 окт. 2025 г.</div>
                        </div>
                    </div>
                    <button class="more-btn">⋮</button>
                </div>
            </div>

            <div class="document-card">
                <div class="document-preview">
                    <svg width="100%" height="100%" viewBox="0 0 220 280">
                        <rect fill="white" width="220" height="280"/>
                        <text x="110" y="140" text-anchor="middle" font-size="12" fill="#5f6368">Document Preview</text>
                    </svg>
                </div>
                <div class="document-info">
                    <div class="document-details">
                        <svg class="doc-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                        <div>
                            <div class="document-title">1111</div>
                            <div class="document-meta">16 окт. 2025 г.</div>
                        </div>
                    </div>
                    <button class="more-btn">⋮</button>
                </div>
            </div>

            <div class="document-card">
                <div class="document-preview">
                    <svg width="100%" height="100%" viewBox="0 0 220 280">
                        <rect fill="white" width="220" height="280"/>
                        <text x="110" y="140" text-anchor="middle" font-size="12" fill="#5f6368">Document Preview</text>
                    </svg>
                </div>
                <div class="document-info">
                    <div class="document-details">
                        <svg class="doc-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20Z"/>
                        </svg>
                        <div>
                            <div class="document-title">1234</div>
                            <div class="document-meta">16 окт. 2025 г.</div>
                        </div>
                    </div>
                    <button class="more-btn">⋮</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>