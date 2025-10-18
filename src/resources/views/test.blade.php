<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    body {
      background-color: #f8fafc;
      color: #1e293b;
    }

    section {
      padding: 40px 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 96%;
      max-width: 1200px;
      display: flex;
      gap: 20px;
      justify-content: center;
    }

    .form-card {
      width: 88%;
      background-color: #fff;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      padding: 20px;
    }

    h1 {
      font-size: 28px;
      font-weight: 800;
      margin-bottom: 5px;
    }

    h2 {
      font-size: 14px;
      color: #64748b;
      margin-bottom: 15px;
    }

    form {
      width: 100%;
    }

    .cover {
      position: relative;
      width: 100%;
      height: 200px;
      border-radius: 8px;
      background-image: url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin-bottom: 15px;
    }

    .profile {
      width: 141px;
      height: 141px;
      border-radius: 50%;
      background-image: url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080');
      background-size: cover;
      background-position: center;
      position: relative;
      top: 30px;
      margin: 0 auto;
    }

    .profile label svg,
    .cover label svg {
      width: 22px;
      height: 22px;
      color: #1d4ed8;
      cursor: pointer;
    }

    .upload-btn {
      background-color: rgba(255,255,255,0.9);
      border-radius: 50%;
      width: 28px;
      height: 28px;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      right: 10px;
      top: 10px;
    }

    .cover-upload {
      position: absolute;
      right: 0;
      top: 0;
      background-color: #fff;
      padding: 6px 10px;
      border-top-left-radius: 6px;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 4px;
      cursor: pointer;
    }

    input[type="file"] {
      display: none;
    }

    .text-center {
      text-align: center;
      margin-top: 10px;
      font-weight: 600;
    }

    .form-row {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 20px;
    }

    @media (min-width: 768px) {
      .form-row {
        flex-direction: row;
      }
    }

    .form-group {
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .form-group label {
      margin-bottom: 6px;
      font-weight: 600;
    }

    .form-group input,
    .form-group select {
      padding: 10px 12px;
      border: 2px solid #cbd5e1;
      border-radius: 8px;
      font-size: 15px;
      color: #1e293b;
    }

    .submit-btn {
      background-color: #3b82f6;
      color: #fff;
      font-size: 18px;
      font-weight: 600;
      width: 100%;
      border: none;
      border-radius: 8px;
      padding: 12px;
      margin-top: 20px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .submit-btn:hover {
      background-color: #2563eb;
    }

  </style>
</head>
<body>

<section>
  <div class="container">
    <div class="form-card">
      <h1>Profile</h1>
      <h2>Create Profile</h2>

      <form>
        <div class="cover">
          <div class="profile">
            <div class="upload-btn">
              <label for="upload_profile">
                <input type="file" id="upload_profile" name="profile" required>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                </svg>
              </label>
            </div>
          </div>

          <label for="upload_cover" class="cover-upload">
            <input type="file" id="upload_cover" name="cover" required>
            Cover
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
            </svg>
          </label>
        </div>

        <h3 class="text-center">Upload Profile and Cover Image</h3>

        <div class="form-row">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" placeholder="First Name">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" placeholder="Last Name">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label>Sex</label>
            <select>
              <option disabled selected>Select Sex</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="form-group">
            <label>Date Of Birth</label>
            <input type="date">
          </div>
        </div>

        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>
  </div>
</section>

</body>
</html>
