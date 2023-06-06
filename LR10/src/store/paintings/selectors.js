export const fetchItems = (store) => {
  const { dispatch } = store;
  dispatch('paintings/fetchItems');
};

export const selectItems = (store) => {
  const { getters } = store;
  return getters['paintings/items']
}

export const removeItem = (store, id) => {
  const { dispatch } = store;
  dispatch('paintings/removeItem', id);
}

export const addItem = (store, { name, surname,  hall }) => {
  const { dispatch } = store;
  dispatch('paintings/addItem', { name, surname,  hall });
}

export const updateItem = (store, { id, name, surname,  hall }) => {
  const { dispatch } = store;
  dispatch('paintings/updateItem', { id, name, surname,  hall });
}

export const selectItemById = (store, id) => {
  const { getters } = store;
  return getters['paintings/itemsByKey'][id] || {};
}

export const paintingsFilter = (store, param) => {
  const { dispatch } = store;
  dispatch('paintings/filter', { param });
}