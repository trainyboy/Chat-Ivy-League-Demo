# Chat-Ivy-League-Demo

## - This repository creates a website that can talk to Openai's ChatGPT.
---------------------------------------------------------------------------------------------------------------------------------------------------
## USERS

### - Users can create an account and login.
### - They have excess to a google form after login.
### - Once filled out, the users can click the done button at the bottom of the page which automatically download ChatGPT's response to the user's device
---------------------------------------------------------------------------------------------------------------------------------------------------
## ADMIN

### - With an admin account, one can excess the entire google form
### *Only be created by modifying role in MYSQL*
---------------------------------------------------------------------------------------------------------------------------------------------------
# Fill in with actual creditials

### - Google form: HTML link of the google form (Make sure the form is pubished)
### - Google sheet (HTML): HTML link of the google sheet (Make sure the form is pubished)
### - Google sheet (CSV): link of the google in CSV format (Make sure the form is published)
### - ChatGPT API Key: Go to Playground OpenAI -> API Key
---------------------------------------------------------------------------------------------------------------------------------------------------
##MYSQL Setup

### - id -> BIGINT -> AUTO INCREMENT -> Primary Key
### - user_id -> BIGINT
### - user_name -> VARCHAR(100)
### - password -> VARCHAR(100)
### - date -> timestamp -> current_timestamp()
### - role -> VARCHAR(100)
----------------------------------------------------------------------------------------------------------------------------------------------------

## Future Modicications

### Adding css to code
  ### > Making login and signup page the same
### - Hashing password saved into MYSQL
### - Make website display a download button to download the pdf instead of autmatically downaloding the pdf to users device
