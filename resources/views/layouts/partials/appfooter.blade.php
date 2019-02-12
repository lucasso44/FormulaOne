    <!-- FOOTER -->
    <footer class="container mt-4">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 First Digitus &middot; <a href="/about">About</a></p>
      </footer>
  
    </main>
    
    {{--  <script src="/js/jquery.min.js"></script>  --}}
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="http://vjs.zencdn.net/6.4.0/video.js"></script>
    {{--  <script src="/assets/jquery-ui/jquery-ui.min.js"></script>  --}}
    <script>
      $(function(){
        $("input[name=term]").autocomplete({
          source: "/search/autocomplete",
          minLength: 3
        });
      });
    </script>
  </body>
  </html>