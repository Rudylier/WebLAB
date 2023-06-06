import api from './api';

export default {
  namespaced: true,
  state: {
    items: [],
  },
  getters: { //записывает
    items: state => state.items,
    itemsByKey: state => state.items.reduce((res, cur) => {
      res[cur['id']] = cur;
      return res;
    }, {}),
  },
  mutations: { //меняет
    setItems: (state, items) => {
      state.items = items;
    },
    addItem: (state, item) => {
      state.items.push(item);
    },
    removeItem: (state, idRemove) => {
      state.items = state.items.filter(({ id }) => id !== idRemove);
    },
    updateItem: (state, updateItem) => {
      const index = state.items.findIndex(item => +item.id === +updateItem.id);
      state.items[index] = updateItem;
    },
    // filter: (state, items) => {
    //   state.items = items;
    // },

  },
  actions: { //вызов мутацию
    fetchItems: async ({ commit }) => {
      const response = await api.halls(); // возврат холов
      const items = await response.json();
      commit('setItems', items)
    },
    removeItem: async ({ commit }, id) => {
      const idRemovedItem = await api.remove( id );
      commit('removeItem', idRemovedItem);
    },
    addItem: async ({ commit }, { hall, speciality }) => {
      const item = await api.add({ hall, speciality });
      commit('addItem', item);
    },
    updateItem: async ({ commit }, { id, hall, speciality }) => {
      const item = await api.update({ id, hall, speciality });
      commit('updateItem', item);
    },
    filter: async ({ commit }, { param }) => {
      const item = await api.filter({ param });
      commit('filter', item);
    }
  },
}
