<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
</script><script type="text/javascript">window.Beacon('init', '{{ $key }}')</script>
@if(config('helpers.helpscout.beacon.identify-user') && auth()->check())
<script type="text/javascript">Beacon('identify', {name: '{{ auth()->user()->name }}', email: '{{ auth()->user()->email }}'})</script>
@endif
