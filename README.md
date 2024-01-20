# Chat-Ivy-League-Demo

## - This repository creates a website that can talk to Openai's ChatGPT.
---------------------------------------------------------------------------------------------------------------------------------------------------
## USERS

### - Users can create an account and log in.
### - They have access to a Google form after login.
### - Once filled out, the users can click the done button at the bottom of the page which automatically downloads ChatGPT's response to the user's device
---------------------------------------------------------------------------------------------------------------------------------------------------
## ADMIN

### - With an admin account, one can excess the entire Google form
### *Only be created by modifying role in MYSQL*
---------------------------------------------------------------------------------------------------------------------------------------------------
# Fill in with actual credentials

### - Google form: HTML link of the Google form (Make sure the form is published)
### - Google sheet (HTML): HTML link of the Google sheet (Make sure the form is published)
### - Google sheet (CSV): link of the Google in CSV format (Make sure the form is published)
### - ChatGPT API Key: Go to Playground OpenAI -> API Key
---------------------------------------------------------------------------------------------------------------------------------------------------
## MYSQL Setup

### - id -> BIGINT -> AUTO INCREMENT -> Primary Key
### - user_id -> BIGINT
### - user_name -> VARCHAR(100)
### - password -> VARCHAR(100)
### - date -> timestamp -> current_timestamp()
### - role -> VARCHAR(100)
----------------------------------------------------------------------------------------------------------------------------------------------------

## Future Modicications

### Adding CSS to code
  ### > Making login and signup pages the same
### - Hashing password saved into MYSQL
### - Make the website display a download button to download the pdf instead of automatically downloading the pdf to user's device
