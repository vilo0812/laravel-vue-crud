<template>
	<v-toolbar>
      <v-toolbar-title>styde</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn text to="/">Home</v-btn>
        <v-btn text :to="{name:'inicio'}">Usuarios</v-btn>
        <v-btn text>Link 3</v-btn>
      </v-toolbar-items>

        <v-btn icon>
          <v-icon>mdi-export-variant</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>mdi-delete-circle</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>mdi-plus-circle</v-icon>
        </v-btn>
    </v-toolbar>
</template>