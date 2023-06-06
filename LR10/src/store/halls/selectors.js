export const fetchItems = ( store ) => {
  const { dispatch } = store;
  dispatch('halls/fetchItems');
};

export const selectItems = ( store ) => {
  const { getters } = store;
  return getters['halls/items']
}

export const removeItem = ( store, id ) => {
  const { dispatch } = store;
  dispatch('halls/removeItem', id);
}

export const addItem = ( store, { hall, speciality } ) => {
  const { dispatch } = store;
  dispatch('halls/addItem', { hall, speciality });
}

export const updateItem = ( store, { id, hall, speciality }) => {
  const { dispatch } = store;
  dispatch('halls/updateItem', { id, hall, speciality });
}

export const selectItemById = (store, id) => {
  const { getters } = store;
  return getters['halls/itemsByKey'][id] || {};
}

export const hallsFilter = (store, param) => {
  const { dispatch } = store;
  dispatch('halls/filter', { param });
}
