# EVChargeHub API Specification

## Auth Endpoints
- **POST** `/api/v1/auth/login`
  - Body: `{ "email": "string", "password": "string" }`
  - Response: `{ "token": "string" }`

- **POST** `/api/v1/auth/register`
  - Body: `{ "name": "string", "email": "string", "password": "string" }`
  - Response: `{ "status": "success" }`