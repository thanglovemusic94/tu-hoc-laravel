<a href="{{ route('user') }}">User</a> |
<a href="/product">Product</a> |
<a href="/news">News</a> |
<a href="/service">Service</a> |

<hr>

<ul>
    <li><a href="/news/1/category/100">bài viết số 1 danh mục 100</a></li>
    <li><a href="/news/2/category/102">bài viết số 2 danh mục 102</a></li>
    <li><a href="/news/3/category/103">bài viết số 3 danh mục 103</a></li>
</ul>

<hr>
<h3>Router name</h3>

<a href="{{ route('user') }}">User</a> |
<a href="{{ route('user') }}">User</a> |

<h3>Router name có parameter</h3>

<a href="{{ route('user.show.branch', ["id" => "1", "branchId" => "1"]) }}">User show branch</a> |
<a href="{{ route('user.show.branch', ["id" => "2", "branchId" => "2"]) }}">User show branch</a> |


<h3>Route Group</h3>

<a href="{{ route('backend.user') }}">User manager</a> |
<a href="{{ route('backend.product') }}">Product manager</a> |
<a href="{{ route('backend.service') }}">Service manager</a> |


