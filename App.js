import React from 'react'; 
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

/*

npm install @react-navigation/native
npx expo install react-native-screens react-native-safe-area-context
npm install react-native-screens react-native-safe-area-context
npm install @react-navigation/stack
npm install @react-navigation/native-stack

*/

import Splash from './src/pages/Splash';
import Cadastro from './src/pages/Cadastro';
import Consulta from './src/pages/Consulta';
import Alterar from './src/pages/Alterar';


const Stack = createNativeStackNavigator ();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="Splash" component={Splash}
        options={{
          headerShown: false,
        }}  
        />
        <Stack.Screen name="Cadastro" component={Cadastro}
        options={{
          headerShown: false,
        }}
        />
        <Stack.Screen name="Consulta" component={Consulta}
        options={{
          headerShown: false,
        }}
        />
        <Stack.Screen name="Alterar" component={Alterar}
        options={{
          headerShown: false,
        }}
        />
      </Stack.Navigator>
    </NavigationContainer>
  );
}