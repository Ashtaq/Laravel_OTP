# OTP verification system

A safe One-Time Password (OTP) verification system implementation.

## Establishment

1. Repository clone:

`` `Bash
git clone [https://github.com/Ashtaq/Laravel_OTP.git](https://github.com/Ashtaq/Laravel_OTP.git)
,

2. Establish dependence:

`` `Bash
Install NPM
,

3. Set the environment variable:

    - Copy `.example` to` to`.
    - Update the required configuration value

4. Start the application:

`` `Bash
NPM Start
,

## tests

Run the test suit using:

`` `Bash
NPM Test
,

The test suits include:

- OTP generation and unit test for verification
- Integration test for API closing point
- Rate limited and security tests for encryption

## beliefs

1. OTP delivery:

    - SMS distribution is the primary method for OTP distribution
    - Users have valid phone numbers registered in the system

2. Security:

    - OTP ended after 5 minutes
    - Maximum 3 failed attempt before temporary lockout
    - Phone numbers are verified before OTP generation

3. technology:
    - Node.JS Runtime Environment
    - Mongodb for data storage
    - Rays limited and radice for cashing

## additional features

1. Rate limited:

    - Brout Force Prevents Attack
    - Configy efforts limitations

2. Multi-channel delivery:

    - SMS (Primary)
    - Email (backup)
    - WhatsApp (optional)

3. Analytics dashboard:

    - Success/Failure Rate
    - Average verification time
    - Geographical distribution of requests

4. Safety Promotion:
    - IP-based blocked
    - Device Fingerprinting
    - Audit logging

## technical decision

1. OTP generation:

    - 6-conductive numeric codes for better user experience
    - Cryptographically safe random number generation
    - No sequential or approximate pattern

2. storage:

    - MySQL chose for scalance
