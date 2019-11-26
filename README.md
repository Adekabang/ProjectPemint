#Project Pemint

- Using Lumen
- API Gateway with Guzzle
- 3 service : service_smk, service_mapel, service_user
- import DB first
- Configure the env and add on last line this code on mygateway env file :
```
SERVICE_SMK=http://localhost:8001/api/smk/
SERVICE_MAPEL=http://localhost:8002/api/mapel/
SERVICE_USER=http://localhost:8003/api/users/
```
- Test with Postman Collection
