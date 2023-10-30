<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <script>
        const ms="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL1VzZXJMb2dpbiIsImlhdCI6MTY5ODM1NDc2NCwiZXhwIjoxNjk4OTU5NTY0LCJuYmYiOjE2OTgzNTQ3NjQsImp0aSI6InUweko4NmsxaVd6R3J1enIiLCJzdWIiOiIyOSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.3KwRS7-bxzF50m2egUBlXgR7t78bRHy6VLUt1PzcOE8";
    console.log(ms);
        fetch('api/user',
    
    {
                method: 'Get',
                headers: {
                        'Content-Type': 'application/json',
                        // 'Authorization': `Bearer ${ms}`,
                        'Authorization': `Bearer ${ms}`,
                        // 'Authorization': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL1VzZXJMb2dpbiIsImlhdCI6MTY5ODM1MzcwMiwiZXhwIjoxNjk4OTU4NTAyLCJuYmYiOjE2OTgzNTM3MDIsImp0aSI6Imh5YkNSRUg4YlJlU3FvVm4iLCJzdWIiOiIyOSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.qzsRMnpcQ-I91DQH-rQIDnMQjQZZVUTbaTfW2b28UNI',
                        // 'X-CSRF-TOKEN': tokenMain.token, // Reemplaza 'tu_token_csrf_aqui' con tu token CSRF
                    },
                    // body: JSON.stringify(data)
                }
            );
    </script>
</body>
</html>