<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
<label for="menu-icon"></label>
<nav class="nav"> 		
    <ul class="pt-5">
        <li><a href="/dashboard" :active="request()->routeIs('dashboard.index')">Dashboard</a></li>
        <li><a href="/categories">Categories</a></li>
        <li><a href="/tags">Tags</a></li>
        <li><a href="#">Posts</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#">Log-in</a></li>
        <li><a href="#">Registration</a></li>
    </ul>
</nav>