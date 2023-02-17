<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Room;
use App\RoomType;
use App\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'Antonius Kevin',
            'role' => 'Guest',
            'email' => 'antonius@gmail.com',
            'password' => bcrypt('anton123')
        ]);

        User::create([
            'name' => 'Vallencius Gavriel',
            'role' => 'Guest',
            'email' => 'vallencius@gmail.com',
            'password' => bcrypt('vallen123')
        ]);

        RoomType::create([
            'type' => 'Single'
        ]);
        RoomType::create([
            'type' => 'Double'
        ]);
        RoomType::create([
            'type' => 'Queen'
        ]);
        RoomType::create([
            'type' => 'King'
        ]);

        Room::create([
            'name' => 'Lavender Room',
            'room_type' => 1,
            'price' => 200000,
            'available' => 15,
            'image' => 'https://images.unsplash.com/photo-1424847262089-18a6858bd7e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Room::create([
            'name' => 'Bougenville Room',
            'room_type' => 1,
            'price' => 250000,
            'available' => 15,
            'image' => 'https://images.unsplash.com/photo-1631554668504-79dd66bbfb94?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
        ]);

        Room::create([
            'name' => 'Rose Room',
            'room_type' => 2,
            'price' => 400000,
            'available' => 10,
            'image' => 'https://images.unsplash.com/photo-1648383228240-6ed939727ad6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'
        ]);

        Room::create([
            'name' => 'Jasmine Room',
            'room_type' => 3,
            'price' => 700000,
            'available' => 7,
            'image' => 'https://images.unsplash.com/photo-1631049421450-348ccd7f8949?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Room::create([
            'name' => 'Lotus Room',
            'room_type' => 4,
            'price' => 800000,
            'available' => 5,
            'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        News::create([
            'title' => 'Beijing Set to Become Largest Travel & Tourism City Destination in the World',
            'writer' => 'WWTC',
            'content' => 'Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the worlds largest Travel & Tourism city destination.

            Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the world’s largest Travel & Tourism city destination. 
            
            The report, sponsored by Visa and researched in partnership with Oxford Economics, ana-lysed key indicators such as Travel & Tourism’s contribution to GDP, employment and trav-eller spend. 
            
            But while long term the outlook for a number of Chinese cities looks positive, prolonged travel restrictions and border closures slowed down the recovery in the short term. 
            
            WTTC studied the impact of the Travel & Tourism sector in four major cities across China; Beijing, Chengdu, Guangzhou, and Shanghai and found a mixed picture across the four city destinations. 
            
            In all four cities the sector’s GDP contribution last year almost fully recovered back to 2019 levels.
            
            The GDP contribution from the sector to Beijing and Chengdu’s economy in 2022 was just 4% and 2% below 2019 levels respectively ($34BN and $5.4BN), compared to $31BN and $5.5BN. 
            
            Last year, the Travel & Tourism’s GDP contribution in Guangzhou and Shanghai was around 7% below 2019 levels. In Guangzhou the sector contributed $13.2BN in 2022 compared to $14.1BN pre-pandemic, while in Shanghai, the sector contributed $29.7BN compared to $31.5BN in 2019. 
            
            Julia Simpson, WTTC President & CEO, said: “China has long been a world-favourite holiday destination and after more than two years of disruption, it’s great to see tourists heading back. Tourists provide a massive boost to both the economy and job creation. 
            
            “It is crucial that the national and local governments continue to recognise the importance of Travel & Tourism for the local and national economies, jobs and businesses.” 
            
            Jobs on the rise 
            
            In 2019, there were 1.35MN people employed by the Travel & Tourism sector in Beijing. But in 2020 this figure dropped to 1.16MN (-15%). In 2021, employment grew by more than 5% and is expected to have grown a further 4% in 2022 to reach 1.27MN jobs. 
            
            In the other three cities, it’s a similar picture. 
            
            Before the pandemic, there were 1.32MN Travel & Tourism jobs in Shanghai, but this num-ber fell to 1.13MN in 2020 (-14%). A 10% rise in 2021 saw the number increase to 1.25MN and it was predicted to see a slight increase to 1.26MN in 2022. 
            
            In Guangzhou there were just over 603,000 jobs in 2019 but this dropped by 23% to just over 464,000. A slight 4% rise in 2021 saw jobs increase to just under 481,000 and WTTC is ex-pecting a 16.5% increase in 2022 to bring the total jobs to over 560,000. 
            
            Chengdu is seeing an even stronger return to pre-pandemic levels. In 2019 there were 336,000 jobs in the city which dropped by 12% to just under 297,000 in 2020. The following year saw a small 5% increase to 311,000 jobs and last year the global tourism body is pre-dicting a 6% increase to 329,500 jobs – just 2% below pre-pandemic levels. 
            
            Visitor spend struggles as borders have remained closed 
            
            Due to the prolonged border closures imposed by the government, international visitor spend is taking longer to recover than in other countries around the world. 
            
            But light is at the end of the tunnel. Whilst international visitor spend is still on average 53% lower in 2022 than it was in 2019, all of the cities analysed are showing modest year-on-year increases. 
            
            International visitor spend in Beijing is just 41% what it was in 2019, with visitors spending a predicted $5BN in 2022 compared to $12.1BN in 2019. In Chengdu, international visitor spend is performing better than the capital with recovery at 61% of 2019 levels. Travellers spent $1.5BN in Chengdu in 2022 compared to $2.5BN in 2019.  
            
            Both Shanghai and Guangzhou have seen international visitor spend drop to 44% of 2019 levels. In Shanghai it went from $11.9BN before the pandemic to $5.2BN in 2022, while in Guangzhou it went from $4.3BN in 2019 to $1.9BN in 2022.',
            'image' => 'https://www.nevistas.com/ul/4/2023/02/16/11.jpg'
        ]);
        News::create([
            'title' => 'Beijing Set to Become Largest Travel & Tourism City Destination in the World',
            'writer' => 'WWTC',
            'content' => 'Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the worlds largest Travel & Tourism city destination.

            Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the world’s largest Travel & Tourism city destination. 
            
            The report, sponsored by Visa and researched in partnership with Oxford Economics, ana-lysed key indicators such as Travel & Tourism’s contribution to GDP, employment and trav-eller spend. 
            
            But while long term the outlook for a number of Chinese cities looks positive, prolonged travel restrictions and border closures slowed down the recovery in the short term. 
            
            WTTC studied the impact of the Travel & Tourism sector in four major cities across China; Beijing, Chengdu, Guangzhou, and Shanghai and found a mixed picture across the four city destinations. 
            
            In all four cities the sector’s GDP contribution last year almost fully recovered back to 2019 levels.
            
            The GDP contribution from the sector to Beijing and Chengdu’s economy in 2022 was just 4% and 2% below 2019 levels respectively ($34BN and $5.4BN), compared to $31BN and $5.5BN. 
            
            Last year, the Travel & Tourism’s GDP contribution in Guangzhou and Shanghai was around 7% below 2019 levels. In Guangzhou the sector contributed $13.2BN in 2022 compared to $14.1BN pre-pandemic, while in Shanghai, the sector contributed $29.7BN compared to $31.5BN in 2019. 
            
            Julia Simpson, WTTC President & CEO, said: “China has long been a world-favourite holiday destination and after more than two years of disruption, it’s great to see tourists heading back. Tourists provide a massive boost to both the economy and job creation. 
            
            “It is crucial that the national and local governments continue to recognise the importance of Travel & Tourism for the local and national economies, jobs and businesses.” 
            
            Jobs on the rise 
            
            In 2019, there were 1.35MN people employed by the Travel & Tourism sector in Beijing. But in 2020 this figure dropped to 1.16MN (-15%). In 2021, employment grew by more than 5% and is expected to have grown a further 4% in 2022 to reach 1.27MN jobs. 
            
            In the other three cities, it’s a similar picture. 
            
            Before the pandemic, there were 1.32MN Travel & Tourism jobs in Shanghai, but this num-ber fell to 1.13MN in 2020 (-14%). A 10% rise in 2021 saw the number increase to 1.25MN and it was predicted to see a slight increase to 1.26MN in 2022. 
            
            In Guangzhou there were just over 603,000 jobs in 2019 but this dropped by 23% to just over 464,000. A slight 4% rise in 2021 saw jobs increase to just under 481,000 and WTTC is ex-pecting a 16.5% increase in 2022 to bring the total jobs to over 560,000. 
            
            Chengdu is seeing an even stronger return to pre-pandemic levels. In 2019 there were 336,000 jobs in the city which dropped by 12% to just under 297,000 in 2020. The following year saw a small 5% increase to 311,000 jobs and last year the global tourism body is pre-dicting a 6% increase to 329,500 jobs – just 2% below pre-pandemic levels. 
            
            Visitor spend struggles as borders have remained closed 
            
            Due to the prolonged border closures imposed by the government, international visitor spend is taking longer to recover than in other countries around the world. 
            
            But light is at the end of the tunnel. Whilst international visitor spend is still on average 53% lower in 2022 than it was in 2019, all of the cities analysed are showing modest year-on-year increases. 
            
            International visitor spend in Beijing is just 41% what it was in 2019, with visitors spending a predicted $5BN in 2022 compared to $12.1BN in 2019. In Chengdu, international visitor spend is performing better than the capital with recovery at 61% of 2019 levels. Travellers spent $1.5BN in Chengdu in 2022 compared to $2.5BN in 2019.  
            
            Both Shanghai and Guangzhou have seen international visitor spend drop to 44% of 2019 levels. In Shanghai it went from $11.9BN before the pandemic to $5.2BN in 2022, while in Guangzhou it went from $4.3BN in 2019 to $1.9BN in 2022.',
            'image' => 'https://www.nevistas.com/ul/4/2023/02/16/11.jpg'
        ]);
        News::create([
            'title' => 'Beijing Set to Become Largest Travel & Tourism City Destination in the World',
            'writer' => 'WWTC',
            'content' => 'Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the worlds largest Travel & Tourism city destination.

            Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the world’s largest Travel & Tourism city destination. 
            
            The report, sponsored by Visa and researched in partnership with Oxford Economics, ana-lysed key indicators such as Travel & Tourism’s contribution to GDP, employment and trav-eller spend. 
            
            But while long term the outlook for a number of Chinese cities looks positive, prolonged travel restrictions and border closures slowed down the recovery in the short term. 
            
            WTTC studied the impact of the Travel & Tourism sector in four major cities across China; Beijing, Chengdu, Guangzhou, and Shanghai and found a mixed picture across the four city destinations. 
            
            In all four cities the sector’s GDP contribution last year almost fully recovered back to 2019 levels.
            
            The GDP contribution from the sector to Beijing and Chengdu’s economy in 2022 was just 4% and 2% below 2019 levels respectively ($34BN and $5.4BN), compared to $31BN and $5.5BN. 
            
            Last year, the Travel & Tourism’s GDP contribution in Guangzhou and Shanghai was around 7% below 2019 levels. In Guangzhou the sector contributed $13.2BN in 2022 compared to $14.1BN pre-pandemic, while in Shanghai, the sector contributed $29.7BN compared to $31.5BN in 2019. 
            
            Julia Simpson, WTTC President & CEO, said: “China has long been a world-favourite holiday destination and after more than two years of disruption, it’s great to see tourists heading back. Tourists provide a massive boost to both the economy and job creation. 
            
            “It is crucial that the national and local governments continue to recognise the importance of Travel & Tourism for the local and national economies, jobs and businesses.” 
            
            Jobs on the rise 
            
            In 2019, there were 1.35MN people employed by the Travel & Tourism sector in Beijing. But in 2020 this figure dropped to 1.16MN (-15%). In 2021, employment grew by more than 5% and is expected to have grown a further 4% in 2022 to reach 1.27MN jobs. 
            
            In the other three cities, it’s a similar picture. 
            
            Before the pandemic, there were 1.32MN Travel & Tourism jobs in Shanghai, but this num-ber fell to 1.13MN in 2020 (-14%). A 10% rise in 2021 saw the number increase to 1.25MN and it was predicted to see a slight increase to 1.26MN in 2022. 
            
            In Guangzhou there were just over 603,000 jobs in 2019 but this dropped by 23% to just over 464,000. A slight 4% rise in 2021 saw jobs increase to just under 481,000 and WTTC is ex-pecting a 16.5% increase in 2022 to bring the total jobs to over 560,000. 
            
            Chengdu is seeing an even stronger return to pre-pandemic levels. In 2019 there were 336,000 jobs in the city which dropped by 12% to just under 297,000 in 2020. The following year saw a small 5% increase to 311,000 jobs and last year the global tourism body is pre-dicting a 6% increase to 329,500 jobs – just 2% below pre-pandemic levels. 
            
            Visitor spend struggles as borders have remained closed 
            
            Due to the prolonged border closures imposed by the government, international visitor spend is taking longer to recover than in other countries around the world. 
            
            But light is at the end of the tunnel. Whilst international visitor spend is still on average 53% lower in 2022 than it was in 2019, all of the cities analysed are showing modest year-on-year increases. 
            
            International visitor spend in Beijing is just 41% what it was in 2019, with visitors spending a predicted $5BN in 2022 compared to $12.1BN in 2019. In Chengdu, international visitor spend is performing better than the capital with recovery at 61% of 2019 levels. Travellers spent $1.5BN in Chengdu in 2022 compared to $2.5BN in 2019.  
            
            Both Shanghai and Guangzhou have seen international visitor spend drop to 44% of 2019 levels. In Shanghai it went from $11.9BN before the pandemic to $5.2BN in 2022, while in Guangzhou it went from $4.3BN in 2019 to $1.9BN in 2022.',
            'image' => 'https://www.nevistas.com/ul/4/2023/02/16/11.jpg'
        ]);
        News::create([
            'title' => 'Beijing Set to Become Largest Travel & Tourism City Destination in the World',
            'writer' => 'WWTC',
            'content' => 'Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the worlds largest Travel & Tourism city destination.

            Research by the World Travel & Tourism Council (WTTC) has revealed that within the next decade, Beijing will overtake Paris to become the world’s largest Travel & Tourism city destination. 
            
            The report, sponsored by Visa and researched in partnership with Oxford Economics, ana-lysed key indicators such as Travel & Tourism’s contribution to GDP, employment and trav-eller spend. 
            
            But while long term the outlook for a number of Chinese cities looks positive, prolonged travel restrictions and border closures slowed down the recovery in the short term. 
            
            WTTC studied the impact of the Travel & Tourism sector in four major cities across China; Beijing, Chengdu, Guangzhou, and Shanghai and found a mixed picture across the four city destinations. 
            
            In all four cities the sector’s GDP contribution last year almost fully recovered back to 2019 levels.
            
            The GDP contribution from the sector to Beijing and Chengdu’s economy in 2022 was just 4% and 2% below 2019 levels respectively ($34BN and $5.4BN), compared to $31BN and $5.5BN. 
            
            Last year, the Travel & Tourism’s GDP contribution in Guangzhou and Shanghai was around 7% below 2019 levels. In Guangzhou the sector contributed $13.2BN in 2022 compared to $14.1BN pre-pandemic, while in Shanghai, the sector contributed $29.7BN compared to $31.5BN in 2019. 
            
            Julia Simpson, WTTC President & CEO, said: “China has long been a world-favourite holiday destination and after more than two years of disruption, it’s great to see tourists heading back. Tourists provide a massive boost to both the economy and job creation. 
            
            “It is crucial that the national and local governments continue to recognise the importance of Travel & Tourism for the local and national economies, jobs and businesses.” 
            
            Jobs on the rise 
            
            In 2019, there were 1.35MN people employed by the Travel & Tourism sector in Beijing. But in 2020 this figure dropped to 1.16MN (-15%). In 2021, employment grew by more than 5% and is expected to have grown a further 4% in 2022 to reach 1.27MN jobs. 
            
            In the other three cities, it’s a similar picture. 
            
            Before the pandemic, there were 1.32MN Travel & Tourism jobs in Shanghai, but this num-ber fell to 1.13MN in 2020 (-14%). A 10% rise in 2021 saw the number increase to 1.25MN and it was predicted to see a slight increase to 1.26MN in 2022. 
            
            In Guangzhou there were just over 603,000 jobs in 2019 but this dropped by 23% to just over 464,000. A slight 4% rise in 2021 saw jobs increase to just under 481,000 and WTTC is ex-pecting a 16.5% increase in 2022 to bring the total jobs to over 560,000. 
            
            Chengdu is seeing an even stronger return to pre-pandemic levels. In 2019 there were 336,000 jobs in the city which dropped by 12% to just under 297,000 in 2020. The following year saw a small 5% increase to 311,000 jobs and last year the global tourism body is pre-dicting a 6% increase to 329,500 jobs – just 2% below pre-pandemic levels. 
            
            Visitor spend struggles as borders have remained closed 
            
            Due to the prolonged border closures imposed by the government, international visitor spend is taking longer to recover than in other countries around the world. 
            
            But light is at the end of the tunnel. Whilst international visitor spend is still on average 53% lower in 2022 than it was in 2019, all of the cities analysed are showing modest year-on-year increases. 
            
            International visitor spend in Beijing is just 41% what it was in 2019, with visitors spending a predicted $5BN in 2022 compared to $12.1BN in 2019. In Chengdu, international visitor spend is performing better than the capital with recovery at 61% of 2019 levels. Travellers spent $1.5BN in Chengdu in 2022 compared to $2.5BN in 2019.  
            
            Both Shanghai and Guangzhou have seen international visitor spend drop to 44% of 2019 levels. In Shanghai it went from $11.9BN before the pandemic to $5.2BN in 2022, while in Guangzhou it went from $4.3BN in 2019 to $1.9BN in 2022.',
            'image' => 'https://www.nevistas.com/ul/4/2023/02/16/11.jpg'
        ]);
    }
}
