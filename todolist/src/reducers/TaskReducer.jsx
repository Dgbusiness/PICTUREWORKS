import uuid from 'uuid/v1';

export const TaskReducer = (state, action) => {
    switch (action.type) {
        case 'ADD_TASK':
            return [
                ...state, {
                    todo: action.task.todo,
                    done: action.task.done,
                    id: uuid()
                }
            ]
            
        case 'REMOVE_TASK':
            return state.filter( task => {
                if (task.id === action.id) {
                    task.done = true;
                }
                return task;
            } );
    
        default:
            return state;
    }
}
