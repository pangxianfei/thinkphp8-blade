<!DOCTYPE html>
<html class="" lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<meta name="keywords" content="@yield('keyword')">
<meta name="description" content="@yield('description')">
@yield('css')
@yield('topjs')
</head>
<body>
@yield('main')
@yield('footerjs')
</body>
</html>