app.component('entity-parent-edit', {
    template: $TEMPLATES['entity-parent-edit'],
    emits: [],

    setup(props, { slots }) {
        const hasSlot = name => !!slots[name]
        return { hasSlot }
    },

    data() {
        return {  }
    },

    computed: {
        parent() {
            return this.entity.parent || null
        }
    },
    
    props: {
        entity: {
            type: Entity,
            required: true
        },
        title: {
            type: String,
            default: __('vinculado','entity-parent-edit'),
        },
        type: {
            type: String,
            required: true
        },
    },

    methods: {
        changeParent(entity) {
                this.entity.parent = entity;
        }
    }
    
});