# PHP Installation Not Found Error Fix:

## Error:

Cannot validate since a PHP installation could not be found. Use the setting `"php.validate.executablePath"` to configure the PHP executable.

## Fix:

1. Go to setting of VS code
2. Search for `"PHP>Validate:Executable Path"` and click on "Edit in setting.json"
3. At last line before "}" add `"php.validate.executablePath": "C:/xampp/php/php.exe"` which is the path of your php.exe that you have installed using XAMPP(while installing XAMPP).
4. Great! Then You are Good To Go !!
