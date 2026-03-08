<!DOCTYPE html>
<html>
<head>
    <title>OnlyOffice Editor</title>
    <script type="text/javascript" src="http://onlyoffice/web-apps/apps/api/documents/api.js"></script>
</head>
<body>
    <div id="editor" style="width:100%; height:90vh;"></div>

    <script type="text/javascript">
        var config = @json($onlyofficeConfig);
        var docEditor = new DocsAPI.DocEditor("editor", config);
    </script>
</body>
</html>
