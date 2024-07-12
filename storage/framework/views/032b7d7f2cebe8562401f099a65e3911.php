

<?php $__env->startSection('content'); ?>
  <!-- HTML -->
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Landing Page</title>
      <link rel="stylesheet" href="<?php echo e(asset('styles/home.css')); ?>">
  </head>
  <body>
    <main>
      <section class="hero">
      
        <img src="<?php echo e(asset('img/karpet4.jpeg')); ?>" alt="Karpet Image">
        <p><strong>SEJARAH KARPET</strong>
        <br><br>Karpet paling awal ditemukan di wilayah Asia Tengah, sekitar abad ke-5 SM. Karpet tertua yang diketahui, Pazyryk, ditemukan di sebuah makam beku di Siberia dan diperkirakan berasal dari sekitar 500 SM. Karpet-karpet awal ini dibuat dengan teknik tenun tangan yang rumit dan sering dihiasi dengan desain geometris atau motif hewan. Selama berabad-abad, pembuatan karpet menyebar ke berbagai budaya, termasuk Persia, Mesir, dan Cina, masing-masing mengembangkan gaya dan teknik unik. Pada abad ke-16 dan 17, karpet Persia mencapai puncak keindahannya dan menjadi barang dagangan berharga di Eropa dan Timur Tengah. Revolusi Industri membawa perubahan besar dengan pengenalan mesin tenun, yang memungkinkan produksi massal karpet dengan biaya lebih rendah.</p>
        <br><br>
      </section>
      <section class="features">
        <h2>About Karpet</h2>
        
        <ul>
          <li>
            <i class="fas fa-lock"></i>
            <h3><strong>Jenis Karpet Serat Alami</strong></h3>
            <p><strong>Wol:</strong> Karpet wol dikenal karena kelembutannya dan daya tahan yang baik. Mereka juga tahan terhadap api dan noda.
              <br>
              <strong>Sutra:</strong> Karpet sutra memiliki kilau alami dan tekstur halus, sering digunakan dalam karpet dekoratif atau mewah.
              <br>
              <strong>Kapas:</strong> Karpet kapas nyaman dan mudah dibersihkan, namun tidak sekuat wol atau sutra.
          </p>
          </li>
          <li>
            <i class="fas fa-rocket"></i>
            <h3><strong>Jenis Karpet Serat Sintetis</strong></h3>
            <p> <strong>Nilon :</strong> Karpet nilon sangat tahan lama dan tahan noda, membuatnya populer untuk area lalu lintas tinggi.
              <br>
                <strong>Poliester:</strong> Karpet poliester menawarkan warna-warna cerah dan tahan terhadap noda, meskipun tidak sekuat nilon.
                <br>
                <strong>Akrilik:</strong> Menyerupai wol, karpet akrilik ringan dan tahan terhadap noda dan jamur.
                <br>
                <strong>Olefin (Polypropylene):</strong> Karpet olefin tahan terhadap kelembaban dan noda, sering digunakan di area luar ruangan atau area basah.</p>
          </li>
          <li>
            <i class="fas fa-cog"></i>
            <h3><strong>Perawatan Karpet</strong></h3>
            <p><strong>Penyedotan Rutin:</strong> Untuk menghilangkan debu dan kotoran yang terperangkap.
              <br>
              <strong>Pembersihan Noda:</strong> Segera membersihkan noda dengan bahan pembersih yang sesuai.
              <br>
              <strong>Pembersihan Profesional:</strong> Melakukan pembersihan karpet secara menyeluruh oleh profesional setidaknya setahun sekali untuk menjaga kebersihan dan kualitas karpet.</p>
            </li>
        </ul>
      </section>
      <section class="call-to-action">
        <h2>Know More About Carpet!</h2>
        <a href="https://www.rukita.co/stories/jenis-karpet">Let's Check </a>
      </section>
    </main>

    <footer>
      <p>&copy; 2024 SPK Metode SAW</p>
    </footer>
  </body>
  </html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spk-saw\resources\views/home.blade.php ENDPATH**/ ?>