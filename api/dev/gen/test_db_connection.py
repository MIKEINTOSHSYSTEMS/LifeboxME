import os
from dotenv import load_dotenv
import psycopg2

load_dotenv()

print("Checking environment variables:")
print(f"DB_HOST: {os.getenv('DB_HOST')}")
print(f"DB_PORT: {os.getenv('DB_PORT')}")
print(f"DB_USER: {os.getenv('DB_USER')}")
print(f"DB_NAME: {os.getenv('DB_NAME')}")
print(f"DB_PASSWORD: {'*' * len(os.getenv('DB_PASSWORD', '')) if os.getenv('DB_PASSWORD') else 'NOT SET'}")

try:
    conn = psycopg2.connect(
        host=os.getenv('DB_HOST'),
        port=int(os.getenv('DB_PORT', '5432')),  # Default to 5432 if not set
        user=os.getenv('DB_USER'),
        password=os.getenv('DB_PASSWORD'),
        database=os.getenv('DB_NAME')
    )
    print("\n✅ Database connection successful!")
    conn.close()
except Exception as e:
    print(f"\n❌ Database connection failed: {e}")