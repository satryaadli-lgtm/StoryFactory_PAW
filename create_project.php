<?php
require_once 'koneksi.php';

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $synopsis = $_POST['synopsis'];
    $target_word_count = $_POST['target_word_count'];
    $user_id = 1; // Kita set hardcode ke 1 dulu karena belum ada sistem login

    // Query untuk menyimpan data
    $sql = "INSERT INTO projects (user_id, title, synopsis, target_word_count) 
            VALUES (:user_id, :title, :synopsis, :target_word_count)";
    
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':synopsis', $synopsis);
    $stmt->bindParam(':target_word_count', $target_word_count);

    if ($stmt->execute()) {
        // Jika berhasil, kembalikan ke halaman dashboard
        header("Location: index.php?status=sukses");
        exit;
    } else {
        $error = "Gagal membuat proyek baru.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buat Proyek Baru | StoryFactory</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=League+Spartan:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Menggunakan style yang sama agar konsisten */
        :root { --navy-blue: #1E293B; --warm-amber: #F59E0B; --light-bg: #FAF7F2; --text-dark: #0F172A; }
        body { font-family: 'League Spartan', sans-serif; background-color: var(--light-bg); color: var(--text-dark); margin: 0; }
        header { background-color: var(--navy-blue); color: white; padding: 1rem 2rem; }
        .logo { font-family: 'DM Serif Display', serif; font-size: 2rem; margin: 0; }
        .logo span { color: var(--warm-amber); }
        .container { max-width: 600px; margin: 2rem auto; padding: 0 1rem; }
        .form-card { background-color: white; border-top: 5px solid var(--navy-blue); padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .form-group { margin-bottom: 1.5rem; }
        label { display: block; font-weight: 600; margin-bottom: 0.5rem; }
        input[type="text"], input[type="number"], textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-family: inherit; box-sizing: border-box; }
        .btn { background-color: var(--warm-amber); color: var(--navy-blue); padding: 10px 20px; text-decoration: none; font-weight: 700; border-radius: 5px; display: inline-block; border: none; cursor: pointer; width: 100%; font-size: 1rem; }
        .btn:hover { background-color: #d97706; color: white; }
        .btn-cancel { background-color: transparent; color: var(--text-dark); border: 1px solid #ccc; margin-top: 10px; text-align: center; }
    </style>
</head>
<body>

    <header>
        <h1 class="logo">Story<span>Factory</span></h1>
    </header>

    <div class="container">
        <div class="form-card">
            <h2 style="font-family: 'DM Serif Display', serif; margin-top:0;">Buat Proyek Novel</h2>
            <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            
            <form action="" method="POST">
                <div class="form-group">
                    <label for="title">Judul Novel / Proyek</label>
                    <input type="text" id="title" name="title" required placeholder="Contoh: The Silmarillion">
                </div>
                
                <div class="form-group">
                    <label for="synopsis">Sinopsis Singkat</label>
                    <textarea id="synopsis" name="synopsis" rows="4" placeholder="Ceritakan sedikit tentang novel ini..."></textarea>
                </div>
                
                <div class="form-group">
                    <label for="target_word_count">Target Kata (Word Count)</label>
                    <input type="number" id="target_word_count" name="target_word_count" value="50000" required>
                </div>
                
                <button type="submit" class="btn">Simpan Proyek</button>
                <a href="index.php" class="btn btn-cancel">Batal</a>
            </form>
        </div>
    </div>

</body>
</html>