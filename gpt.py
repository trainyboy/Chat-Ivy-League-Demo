#!/Library/Frameworks/Python.framework/Versions/3.12/bin/python3

#libraries from XAMPP
import cgi
import cgitb; cgitb.enable()  # for debugging

#Additional libraries
import pandas as pd
import requests
from io import StringIO
from openai import OpenAI
from fpdf import FPDF

# Read data from google sheet(CSV file)
def process_data():
    try:
        url = 'URL'
        response = requests.get('URL of sheet in CSV')
        df = pd.read_csv(StringIO(response.text), encoding='utf-8')
        
        # Combine prompts and responses
        if len(df) > 0:
            first_row_values = df.iloc[0].astype(str).tolist()
            last_row_values = df.iloc[-1].astype(str).tolist()
            return 'First row: ' + ' '.join(first_row_values) + '\nLast row: ' + ' '.join(last_row_values)
        else:
            return "No data in the CSV file."
    except Exception as e:
        return f"Error reading CSV file: {e}"
        
# Generate response into PDF
def generate_pdf(content):
    pdf = FPDF()
    pdf.add_page()
    pdf.set_font("Arial", size=12)
    pdf.multi_cell(0, 10, txt=content)
    pdf.output("OpenAI_Response.pdf")

def main():
    result_string = process_data()
    
    # Talk to openai Api 
    client = OpenAI(api_key="API_KEY")
    try:
        chat_completion = client.chat.completions.create(
            model="gpt-3.5-turbo",
            messages=[{"role": "user", "content": f"I'm a 9th grader and want to explore college majors, can you give me some advice based on this data? {result_string}"}]
        )

    # Combine prompt and response 
        generated_text = chat_completion.choices[0].message.content
        generate_pdf(generated_text)
        return "PDF generated successfully."
    except Exception as e:
        return f"An error occurred: {e}"

# HTTP header
print("Content-Type: text/html\n")

# Outout result
try:
    output = main()
    print(f"<html><body><p>{output}</p></body></html>")
except Exception as e:
    print("<html><body>")
    print(f"<p>An error occurred: {e}</p>")
    print("</body></html>")
