</br>
<div class="jumbotron">
	<div class="row">
	  <div class="col-8 ucapan">
		 <h1 class="entry-title"></h1>
	  </div>
	  <div class="col-4">
		 <img src="ganteng.png" class="img-fluid float-right" alt="Responsive image">
	  </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script>
  <script>
    gsap.registerPlugin(TextPlugin);
    gsap.to(".ucapan h1", {
      duration: 1.5,
      delay: 1,
      text: "Sistem Pakar Diagnosa Tingkat Depresi Pada Remaja"
    })
    gsap.from(".jumbotron", {
      duration: 1,
      y: '-100%',
      opacity: 0,
      ease: 'back'
    });
  </script>