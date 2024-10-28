import json
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.preprocessing import LabelEncoder


file_path = 'C:/xampp/htdocs/ap/pro/stored.txt'  # Replace with the actual file path

try:
    with open(file_path, 'r') as file:
        stored_variable = file.read()
        print(f"Content of 'stored.txt': {stored_variable}")
except FileNotFoundError:
    print("File not found. Make sure the file path is correct.")




# Load your data
agri = pd.read_csv('C:/xampp/htdocs/ap/pro/Agri_district.csv')
weather = pd.read_csv('C:/xampp/htdocs/ap/pro/IndianWeatherRepository.csv')
rain = pd.read_csv('C:/xampp/htdocs/ap/pro/district wise rainfall normal.csv')
recomm = pd.read_csv('C:/xampp/htdocs/ap/pro/crop_recommendation.csv')
soil = pd.read_csv('C:/xampp/htdocs/ap/pro/soil.csv')
sr = pd.read_csv('C:/xampp/htdocs/ap/pro/soil_recomm.csv')

# Columns needed
agri = agri[['state', 'district', 'market', 'commodity', 'modal_price']]
weather = weather[['region', 'location_name', 'temperature_celsius', 'humidity']]
rain = rain[['STATE_UT_NAME', 'DISTRICT', 'ANNUAL']]
recomm = recomm[['temperature', 'humidity', 'rainfall', 'label']]
weather['region'] = weather['region'].str.upper()

# District name replacements
district_replacements = {
     'Thrissur': 'Thirssur',
    'Viluppuram': 'Villupuram',
    'Kasaragod': 'Kasargod',
    'Vadodara': 'Vadodara(Baroda)',
    'Bulandshahr': 'Bulandshahar',
    'Tarn Taran': 'Tarntaran',
    'Sundargarh': 'Sundergarh',
    'Kannauj': 'Kannuj',
    'Dehradun': 'Dehradoon',
    'Jalor': 'Jalore',
    'Sipahijula': 'Sepahijala',
    'South Twenty Four Parganas': 'South 24 Parganas',
    'Solapur': 'Sholapur',
    'Moradabad': 'Muradabad',
    'Rupnagar': 'Ropar (Rupnagar)',
    'North Twenty Four Parganas': 'North 24 Parganas',
    'Lakhimpur': 'Khiri (Lakhimpur)',
    'Panch Mahals': 'Panchmahals',
    'Maldah': 'Malda',
    'Barddhaman': 'Burdwan',
    'Barwani': 'Badwani',
    'Paschim Medinipur': 'Medinipur(W)',
    'Gautam Buddha Nagar': 'Gautam Budh Nagar',
    'Chitrakoot': 'Chitrakut',
    'Rangareddy': 'Ranga Reddy',
    'Narsimhapur': 'Narsinghpur',
    'Chittoor': 'Chittor',
    'Anugul': 'Angul',
    'Farrukhabad': 'Farukhabad',
    'Nabarangapur': 'Nowarangpur',
    'Tiruvannamalai': 'Thiruvannamalai',
    'Jalaun': 'Jalaun (Orai)',
    'Bathinda': 'Bhatinda',
    'Hugli': 'Hooghly',
    'Hydrabad': 'Hyderabad',
    'Ahmadnagar': 'Ahmednagar',
    'Rae Bareli': 'Raebarelli',
    'Udham Singh Nagar': 'UdhamSinghNagar',
    'Kanniyakumari': 'Nagercoil (Kannyiakumari)',
    'Anuppur': 'Anupur',
    'Chittaurgarh': 'Chittorgarh',
    'Buldana': 'Buldhana'
}

for (o, r) in district_replacements.items():
    weather['location_name'].replace(to_replace=o, value=r, inplace=True)
print(recomm['label'].unique())   
soil['State']=soil['State'].str.upper()    
weather['location_name']=weather['location_name'].str.upper()
weather['region']=weather['region'].str.upper()
# Merge weather and rain DataFrames based on matching columns
climate = pd.merge(weather, rain, left_on=['region', 'location_name'], right_on=['STATE_UT_NAME', 'DISTRICT'])
recomm=pd.merge(recomm, sr, left_on='label', right_on='Crops')

soil_crops_mapping = {
    'red and yellow': [
        'rice', 'maize', 'blackgram', 'lentil',
        'mothbeans', 'mungbean',
        'kidneybeans',
        'banana', 'mango', 'grapes', 'watermelon', 'muskmelon', 'apple', 'orange', 'papaya', 'coconut', 'cotton', 'jute', 'coffee', 'sunflower'
    ],
    'alluvial': [
        'rice', 'maize', 'blackgram', 'lentil',
        'mothbeans', 'mungbean',
        'kidneybeans',
        'banana', 'mango', 'grapes', 'watermelon', 'muskmelon', 'apple', 'orange', 'papaya', 'coconut', 'cotton', 'jute', 'coffee', 'peanut'
    ],
    'black': [
        'rice', 'maize', 'blackgram', 'lentil',
        'mothbeans', 'mungbean',
        'kidneybeans',
        'banana', 'mango', 'grapes', 'watermelon', 'muskmelon', 'apple', 'orange', 'papaya', 'coconut', 'cotton', 'jute', 'coffee', 'soybean'
    ],
    'laterite': ['cashew', 'rubber', 'coconut'],
    'desert': ['pearl millet', 'mustard', 'bajra'],
    'mountain': ['potatoes', 'apples', 'tea'],
    'red': ['groundnuts', 'pulses', 'jute']
}

# Load selected state and district

# Merge weather and rain DataFrames based on matching columns
climate = pd.merge(weather, rain, left_on=['region', 'location_name'], right_on=['STATE_UT_NAME', 'DISTRICT'])
recomm = pd.merge(recomm, sr, left_on='label', right_on='Crops')

# Default district
d = stored_variable

t, r, h, s = '', '', '', ''
rc = {}
s1 = '' # Storing the selected state in s1

for i1, r1 in climate.iterrows():
    if r1['DISTRICT'] == d.upper():
        t, r, h,s1 = r1['temperature_celsius'], r1['ANNUAL'], r1['humidity'],r1['STATE_UT_NAME'].title()
        for i2, r2 in recomm.iterrows():
            c = 0
            if abs(r1['temperature_celsius'] - r2['temperature']) <= 10:
                c += 1
                c += 1
            if abs(r1['ANNUAL'] - r2['rainfall']) <= 50:
                c += 1
            if abs(r1['humidity'] - r2['humidity']) < 2:
                c += 1
            for i3, r3 in soil.iterrows():
                if r3['State'] == r1['STATE_UT_NAME']:
                    s = r3['Soil_type']
                    if r2['label'] in soil_crops_mapping[r3['Soil_type'].lower()]:
                        rc[r2['label']] = c

print("Soil Type: ", s, "\nTemp(C): ", t, "\nAnnual rainfall(cm): ", r, "\nHumidity: ", h)
print("Recommended crops: ")
k = {'Soil': s, 'Temp': t, 'Rain': r, 'Humidity': h}
m = {'State': s1, 'District': d.title()}
rc = {k: v for k, v in sorted(rc.items(), key=lambda item: item[1], reverse=True)}

c = 0
l = []
for i in rc.keys():
    if c < 3:
        if rc[i] >= 2:
            print(i)
            c += 1
            l.append(i)
k['Crops'] = l
print(k, m)








with open('C:\\xampp\\htdocs\\ap\\pro\\k.json', 'w') as file:
    json.dump(k, file)

with open('C:\\xampp\\htdocs\\ap\\pro\\m.json', 'w') as file:
    json.dump(m, file)
    
print(d)
