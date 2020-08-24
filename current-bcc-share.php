<!-- HTML static page for Police in Politics site -->
<!doctype html>
<html>
<?php include 'head.php';?>
<body>
	<?php include 'nav.php';?>
	<div class="content">

    <div class="row">
      <div class="col-sm-4">
        <div class="directions">
          <h3>How to read this chart</h3>
          <p>Which current city councilors have received the most
            money in police donations? What proportion of
            different city councilors’ campaign donations
          come from police?</p>
          <p>The size of the block reflects the total amount of
            money received from the police. The color reflects
            the percentage of all their campaign donations
            (police and non-police) that came from police
          (lighter meaning smaller, darker meaning larger).</p>
        </div>
      </div>
      <div class="col-sm-8">

          <div class="d-sm-none" style="height: 2rem;"></div>
        <!-- <p align="center" style="margin-top:1rem;">
          <em>If the Tableau charts aren't loading, please refresh.</em>
        </p> -->

        <div class='tableauPlaceholder' id='viz1598041514669' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Sh&#47;ShareofpolicedonationstoCurrentCityCouncilors&#47;Tileplotofpolicecontributionsasarpercentageofallcontributionstocurrentcitycouncillors&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
          <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
          <param name='embed_code_version' value='3' />
          <param name='site_root' value='' />
          <param name='name' value='ShareofpolicedonationstoCurrentCityCouncilors&#47;Tileplotofpolicecontributionsasarpercentageofallcontributionstocurrentcitycouncillors' />
          <param name='tabs' value='no' />
          <param name='toolbar' value='yes' />
          <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Sh&#47;ShareofpolicedonationstoCurrentCityCouncilors&#47;Tileplotofpolicecontributionsasarpercentageofallcontributionstocurrentcitycouncillors&#47;1.png' />
          <param name='animate_transition' value='yes' />
          <param name='display_static_image' value='yes' />
          <param name='display_spinner' value='yes' />
          <param name='display_overlay' value='yes' />
          <param name='display_count' value='yes' />
          <param name='language' value='en' /></object></div>
          <script type='text/javascript'>
            var divElement = document.getElementById('viz1598041514669');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = '550px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
          </script>

          <p align="center" style="margin-top:1rem;">
            <em>
              Visualizations by
              <a href="http://www.bu.edu/spark/">BU Spark!</a>
            </em>
          </p>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
<?php include 'footer.php';?>